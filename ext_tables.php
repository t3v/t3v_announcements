<?php
defined('TYPO3_MODE') or die('Access denied.');

call_user_func(function($namespace, $extkey) {
  $extensionSignature = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($namespace . '.' . $extkey);

  // === TCA ===

  // --- Job Ad Model ---

  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_t3vannouncements_domain_model_job_ad', 'EXT:' . $extkey . '/Resources/Private/Language/locallang_csh_tx_t3vannouncements_domain_model_job_ad.xlf');
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_t3vannouncements_domain_model_job_ad');

  // --- News Article Model ---

  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_t3vannouncements_domain_model_news_article', 'EXT:' . $extkey . '/Resources/Private/Language/locallang_csh_tx_t3vannouncements_domain_model_news_article.xlf');
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_t3vannouncements_domain_model_news_article');

  // === Icons ===

  $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
    \TYPO3\CMS\Core\Imaging\IconRegistry::class
  );

  // --- Job Ads Content Element ---

  $iconIdentifier = 'job_ads_content_element';

  $iconRegistry->registerIcon(
    "{$extkey}-{$iconIdentifier}",
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => "EXT:{$extkey}/Resources/Public/Icons/ContentElements/JobAdsContentElement.svg"]
  );

  // --- Latest Job Ads Content Element ---

  $iconIdentifier = 'latest_job_ads_content_element';

  $iconRegistry->registerIcon(
    "{$extkey}-{$iconIdentifier}",
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => "EXT:{$extkey}/Resources/Public/Icons/ContentElements/LatestJobAdsContentElement.svg"]
  );

  // --- Latest News Articles Content Element ---

  $iconIdentifier = 'latest_news_articles_content_element';

  $iconRegistry->registerIcon(
    "{$extkey}-{$iconIdentifier}",
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => "EXT:{$extkey}/Resources/Public/Icons/ContentElements/LatestNewsArticlesContentElement.svg"]
  );

  // --- News Articles Content Element ---

  $iconIdentifier = 'news_articles_content_element';

  $iconRegistry->registerIcon(
    "{$extkey}-{$iconIdentifier}",
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => "EXT:{$extkey}/Resources/Public/Icons/ContentElements/NewsArticlesContentElement.svg"]
  );

  // === TypoScript ===

  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extkey, 'Configuration/TypoScript', 'T3v Announcements');
}, 't3v', $_EXTKEY);