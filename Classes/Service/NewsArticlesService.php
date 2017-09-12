<?php
namespace T3v\T3vAnnouncements\Service;

use TYPO3\CMS\Core\Utility\GeneralUtility;

use T3v\T3vCore\Service\PageService;
use T3v\T3vCore\Service\QueryResultService;

use T3v\T3vAnnouncements\Domain\Repository\NewsArticleRepository;
use T3v\T3vAnnouncements\Service\AbstractService;

/**
 * News Articles Service Class
 *
 * @package T3v\T3vAnnouncements\Service
 */
class NewsArticlesService extends AbstractService {
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
   * The news article repository.
   *
   * @var \T3v\T3vAnnouncements\Domain\Repository\NewsArticleRepository
   */
  protected $newsArticleRepository;

  /**
   * Constructs a new news articles service.
   */
  public function __construct() {
    parent::__construct();

    $this->pageService           = $this->objectManager->get(PageService::class);
    $this->queryResultService    = $this->objectManager->get(QueryResultService::class);
    $this->newsArticleRepository = $this->objectManager->get(NewsArticleRepository::class);
  }

  /**
   * Get the latest news articles.
   *
   * @param int $limit The optional limit, defaults to `2`
   * @return array The latest news articles
   */
  public function getLatestNewsArticles($limit = 2) {
    $limit = intval($limit);

    $result = [];

    $newsArticles = $this->newsArticleRepository->findAll();

    foreach ($newsArticles as $newsArticle) {
      $result[] = $newsArticle;
    }

    $result = $this->queryResultService->filterByLanguagePresets($result, self::LANGUAGE_PRESETS);
    $result = array_slice($result, 0, $limit);

    return $result;
  }

  /**
   * Finder to query for news articles by the subpages of a page.
   *
   * @param int $pid The PID of the page to search from
   * @param int $recursion The recursion level, defaults to `1`
   * @return array The found news articles
   */
  public function findBySubpages($pid, $recursion = 1) {
    $pid       = intval($pid);
    $recursion = intval($recursion);

    $subpagesUids = $this->pageService->getSubpagesUids($pid, $recursion);
    $result       = $this->findByPids($subpagesUids);

    return $result;
  }

  /**
   * Finder to query for news articles by multiple PIDs.
   *
   * @param array|string $pids The PIDs as array or as string, seperated by `,`
   * @return array The found news articles
   */
  public function findByPids($pids) {
    if (is_string($pids)) {
      $pids = GeneralUtility::intExplode(',', $pids, true);
    }

    $result = $this->newsArticleRepository->findByPids($pids);
    $result = $this->queryResultService->filterByLanguagePresets($result, self::LANGUAGE_PRESETS);

    return $result;
  }
}