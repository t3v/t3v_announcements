<?php
defined('TYPO3_MODE') or die('Access denied.');

call_user_func(function($namespace, $extkey) {
  $extensionSignature = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($namespace . '.' . $extkey);

  // === TCA ===

  // --- News Article Model ---

  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_t3vannouncements_domain_model_news_article', 'EXT:' . $extkey . '/Resources/Private/Language/locallang_csh_tx_t3vannouncements_domain_model_news_article.xlf');
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_t3vannouncements_domain_model_news_article');

  // === Icons ===

  $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
    \TYPO3\CMS\Core\Imaging\IconRegistry::class
  );

  // --- News Latest Articles Content Element ---

  $iconIdentifier = 'news_latest_articles_content_element';

  $iconRegistry->registerIcon(
    "{$extkey}-{$iconIdentifier}",
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => "EXT:{$extkey}/Resources/Public/Icons/ContentElements/News/LatestArticlesContentElement.svg"]
  );

  // === TypoScript ===

  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extkey, 'Configuration/TypoScript', 'T3v Announcements');
}, 't3v', $_EXTKEY);