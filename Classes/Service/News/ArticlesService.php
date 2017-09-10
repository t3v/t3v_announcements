<?php
namespace T3v\T3vAnnouncements\Service\News;

use TYPO3\CMS\Core\Utility\GeneralUtility;

use T3v\T3vCore\Service\PageService;
use T3v\T3vCore\Service\QueryResultService;

use T3v\T3vAnnouncements\Domain\Repository\News\ArticleRepository;
use T3v\T3vAnnouncements\Service\AbstractService;

/**
 * Articles Service Class
 *
 * @package T3v\T3vAnnouncements\Service\News
 */
class ArticlesService extends AbstractService {
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
   * The article repository.
   *
   * @var \T3v\T3vAnnouncements\Domain\Repository\News\ArticleRepository
   */
  protected $articleRepository;

  /**
   * Constructs a new articles service.
   */
  public function __construct() {
    parent::__construct();

    $this->pageService        = $this->objectManager->get(PageService::class);
    $this->queryResultService = $this->objectManager->get(QueryResultService::class);
    $this->articleRepository  = $this->objectManager->get(ArticleRepository::class);
  }

  /**
   * Get the latest articles.
   *
   * @param int $limit The optional limit, defaults to `2`
   * @return array The latest articles
   */
  public function getLatestArticles($limit = 2) {
    $limit = intval($limit);

    $result = [];

    $articles = $this->articleRepository->findAll();

    foreach ($articles as $article) {
      $result[] = $article;
    }

    $result = $this->queryResultService->filterByLanguagePresets($result, self::LANGUAGE_PRESETS);
    $result = array_slice($result, 0, $limit);

    return $result;
  }

  /**
   * Finder to query by the subpages of a page.
   *
   * @param int $pid The PID of the page to search from
   * @param int $recursion The recursion level, defaults to `1`
   * @return array The found news
   */
  public function findBySubpages($pid, $recursion = 1) {
    $pid       = intval($pid);
    $recursion = intval($recursion);

    $subpagesUids = $this->pageService->getSubpagesUids($pid, $recursion);
    $result       = $this->findByPids($subpagesUids);

    return $result;
  }

  /**
   * Finder to query by multiple PIDs.
   *
   * @param array|string $pids The PIDs as array or as string, seperated by `,`
   * @return array The found news
   */
  public function findByPids($pids) {
    if (is_string($pids)) {
      $pids = GeneralUtility::intExplode(',', $pids, true);
    }

    $result = $this->articleRepository->findByPids($pids);
    $result = $this->queryResultService->filterByLanguagePresets($result, self::LANGUAGE_PRESETS);

    return $result;
  }
}