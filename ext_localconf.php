<?php
defined('TYPO3_MODE') or die('Access denied.');

call_user_func(function($namespace, $extkey) {
  $extensionSignature = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($namespace . '.' . $extkey);

  // === Content Elements ===

  // --- Latest Articles Content Element (News) ---

  \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    $extensionSignature,

    // A unique name of the content element in upper camel case
    'NewsLatestArticles',

    // An array holding the controller-action-combinations that are accessible
    [
      // The first controller and its first action will be the default
      'ContentElements\News\LatestArticlesContentElement' => 'index'
    ],

    // An array of non-cachable controller-action-combinations (they must already be enabled)
    [
      'ContentElements\News\LatestArticlesContentElement' => 'index'
    ]
  );

  // === TsConfig ===

  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $extkey . '/Configuration/TSconfig.ts">');
}, 't3v', $_EXTKEY);