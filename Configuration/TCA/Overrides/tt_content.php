<?php
defined('TYPO3_MODE') or die('Access denied.');

call_user_func(function($namespace, $extkey) {
  $extensionName      = strtolower(\TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($extkey));
  $extensionSignature = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($namespace . '.' . $extkey);

  // === Content Elements ===

  // --- Latest Job Ads Content Element ---

  \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    $extensionSignature,

    // A unique name of the content element in upper camel case
    'JobAdsLatestJobAds',

    // Description of the content element shown in the backend dropdown field
    'Latest Job Ads Content Element'
  );

  $contentElementName      = strtolower('JobAdsLatestJobAds');
  $contentElementSignature = $extensionName . '_' . $contentElementName;

  $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentElementSignature] = 'layout,select_key,pages,recursive';
  $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentElementSignature] = 'pi_flexform';
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($contentElementSignature, 'FILE:EXT:' . $extkey . '/Configuration/FlexForms/ContentElements/JobAds/LatestJobAdsContentElement.xml');

  // --- Latest News Articles Content Element ---

  \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    $extensionSignature,

    // A unique name of the content element in upper camel case
    'NewsLatestNewsArticles',

    // Description of the content element shown in the backend dropdown field
    'Latest News Articles Content Element'
  );

  $contentElementName      = strtolower('NewsLatestNewsArticles');
  $contentElementSignature = $extensionName . '_' . $contentElementName;

  $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentElementSignature] = 'layout,select_key,pages,recursive';
  $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentElementSignature] = 'pi_flexform';
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($contentElementSignature, 'FILE:EXT:' . $extkey . '/Configuration/FlexForms/ContentElements/News/LatestNewsArticlesContentElement.xml');
}, 't3v', 't3v_announcements');