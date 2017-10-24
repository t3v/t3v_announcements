<?php
namespace T3v\T3vAnnouncements\Controller\ContentElements;

use T3v\T3vContent\Controller\ContentElements\ContentElementController;

use T3v\T3vAnnouncements\Service\JobAdsService;

/**
 * Job Ads Content Element Controller Class
 *
 * @package T3v\T3vAnnouncements\Controller\ContentElements
 */
class JobAdsContentElementController extends ContentElementController {
  /**
   * The job ads service.
   *
   * @var \T3v\T3vAnnouncements\Service\JobAdsService
   * @inject
   */
  protected $jobAdsService;

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

    $jobAds = $this->jobAdsService->findByPage($pid, 99);

    $this->view->assign('settings', $settings);
    $this->view->assign('jobAds', $jobAds);
  }
}