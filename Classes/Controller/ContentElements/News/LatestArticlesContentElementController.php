<?php
namespace T3v\T3vAnnouncements\Controller\ContentElements\News;

use T3v\T3vContent\Controller\ContentElements\ContentElementController;

use T3v\T3vAnnouncements\Service\News\ArticlesService;

/**
 * Latest News Content Element Controller Class
 *
 * @package T3v\T3vAnnouncements\Controller\ContentElements\News
 */
class LatestArticlesContentElementController extends ContentElementController {
  /**
   * The articles service.
   *
   * @var \T3v\T3vAnnouncements\Service\News\ArticlesService
   * @inject
   */
  protected $articlesService;

  /**
   * The index action.
   *
   * @return void
   */
  public function indexAction() {
    $settings         = $this->settings;
    $numberOfArticles = $settings['numberOfArticles'] ? intval($settings['numberOfArticles']) : 2;
    $articles         = $this->articlesService->getLatestArticles($numberOfArticles);

    $this->view->assign('settings', $settings);
    $this->view->assign('articles', $articles);
  }
}