<?php
namespace T3v\T3vAnnouncements\Service;

use TYPO3\CMS\Core\Utility\GeneralUtility;

use T3v\T3vCore\Service\PageService;
use T3v\T3vCore\Service\QueryResultService;

use T3v\T3vAnnouncements\Domain\Repository\JobAdRepository;
use T3v\T3vAnnouncements\Service\AbstractService;

/**
 * Job Ads Service Class
 *
 * @package T3v\T3vAnnouncements\Service
 */
class JobAdsService extends AbstractService {
  /**
   * The page service.
   *
   * @var \T3v\T3vCore\Service\PageService
   */
  protected $pageService;

  /**
   * The query result service.
   *
   * @var \T3v\T3vCore\Service\QueryResultService
   */
  protected $queryResultService;

  /**
   * The job ad repository.
   *
   * @var \T3v\T3vAnnouncements\Domain\Repository\JobAdRepository
   */
  protected $jobAdRepository;

  /**
   * Constructs a new job ads service.
   */
  public function __construct() {
    parent::__construct();

    $this->pageService        = $this->objectManager->get(PageService::class);
    $this->queryResultService = $this->objectManager->get(QueryResultService::class);
    $this->jobAdRepository    = $this->objectManager->get(JobAdRepository::class);
  }

  /**
   * Get the latest job ads.
   *
   * @param int $limit The optional limit, defaults to `2`
   * @return array The latest job ads
   */
  public function getLatestJobAds($limit = 2) {
    $limit = intval($limit);

    $result = [];

    $jobAds = $this->jobAdRepository->findAll();

    foreach ($jobAds as $jobAd) {
      $result[] = $jobAd;
    }

    $result = $this->queryResultService->filterByLanguagePresets($result, self::LANGUAGE_PRESETS);
    $result = array_slice($result, 0, $limit);

    return $result;
  }

  /**
   * Finder to query for job ads by the subpages of a page.
   *
   * @param int $pid The PID of the page to search from
   * @param int $recursion The recursion level, defaults to `1`
   * @return array The found job ads
   */
  public function findBySubpages($pid, $recursion = 1) {
    $pid       = intval($pid);
    $recursion = intval($recursion);

    $subpagesUids = $this->pageService->getSubpagesUids($pid, $recursion);
    $result       = $this->findByPids($subpagesUids);

    return $result;
  }

  /**
   * Finder to query for job ads by multiple PIDs.
   *
   * @param array|string $pids The PIDs as array or as string, seperated by `,`
   * @return array The found job ads
   */
  public function findByPids($pids) {
    if (is_string($pids)) {
      $pids = GeneralUtility::intExplode(',', $pids, true);
    }

    $result = $this->jobAdRepository->findByPids($pids);
    $result = $this->queryResultService->filterByLanguagePresets($result, self::LANGUAGE_PRESETS);

    return $result;
  }
}