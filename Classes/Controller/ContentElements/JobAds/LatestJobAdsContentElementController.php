<?php
namespace T3v\T3vAnnouncements\Controller\ContentElements\JobAds;

use T3v\T3vContent\Controller\ContentElements\ContentElementController;

use T3v\T3vAnnouncements\Service\JobAdsService;

/**
 * Latest Job Ads Content Element Controller Class
 *
 * @package T3v\T3vAnnouncements\Controller\ContentElements\JobAds
 */
class LatestJobAdsContentElementController extends ContentElementController {
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
    $settings       = $this->settings;
    $numberOfJobAds = $settings['numberOfJobAds'] ? intval($settings['numberOfJobAds']) : 2;
    $jobAds         = $this->jobAdsService->getLatestJobAds($numberOfJobAds);

    $this->view->assign('settings', $settings);
    $this->view->assign('jobAds', $jobAds);
  }
}