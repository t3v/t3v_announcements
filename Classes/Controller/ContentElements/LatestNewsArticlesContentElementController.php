<?php
namespace T3v\T3vAnnouncements\Controller\ContentElements;

use T3v\T3vContent\Controller\ContentElements\ContentElementController;

use T3v\T3vAnnouncements\Service\NewsArticlesService;

/**
 * Latest News Articles Content Element Controller Class
 *
 * @package T3v\T3vAnnouncements\Controller\ContentElements
 */
class LatestNewsArticlesContentElementController extends ContentElementController {
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
    $settings             = $this->settings;
    $numberOfNewsArticles = $settings['numberOfNewsArticles'] ? intval($settings['numberOfNewsArticles']) : 2;
    $newsArticles         = $this->newsArticlesService->getLatestNewsArticles($numberOfNewsArticles);

    $this->view->assign('settings', $settings);
    $this->view->assign('newsArticles', $newsArticles);
  }
}