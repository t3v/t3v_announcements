<?php
namespace T3v\T3vAnnouncements\Controller\ContentElements;

use T3v\T3vContent\Controller\ContentElements\ContentElementController;

use T3v\T3vAnnouncements\Service\NewsArticlesService;

/**
 * News Articles Content Element Controller Class
 *
 * @package T3v\T3vAnnouncements\Controller\ContentElements
 */
class NewsArticlesContentElementController extends ContentElementController {
  /**
   * The news articles service.
   *
   * @var \T3v\T3vAnnouncements\Service\NewsArticlesService
   * @inject
   */
  protected $newsArticlesService;

  /**
   * The index action.
   *
   * @return void
   */
  public function indexAction() {
    $settings = $this->settings;

    if ($settings['entryPage']) {
      $pid = $settings['entryPage'];
    } else {
      $pid = intval($GLOBALS['TSFE']->id);
    }

    $newsArticles = $this->newsArticlesService->findByPage($pid, 99);
    $timeline     = $this->builtTimelineOfNewsArticles($newsArticles);

    $this->view->assign('settings', $settings);
    $this->view->assign('timeline', $timeline);
    $this->view->assign('newsArticles', $newsArticles);
  }

  /**
   * Helper function to build a timeline of news articles (news articles separated by years).
   *
   * @param array $newsArticles The news articles
   * @return array The timeline
   */
  protected function builtTimelineOfNewsArticles($newsArticles) {
    $timeline = [];

    foreach ($newsArticles as $newsArticle) {
      $sortDate    = $newsArticle->getSortDate();
      $publishYear = $sortDate->format('Y');

      $timeline[$publishYear]['label']          = $publishYear;
      $timeline[$publishYear]['newsArticles'][] = $newsArticle;
    }

    krsort($timeline, SORT_NUMERIC);

    return $timeline;
  }
}