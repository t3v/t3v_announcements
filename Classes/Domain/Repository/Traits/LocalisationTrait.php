<?php
namespace T3v\T3vAnnouncements\Domain\Repository\Traits;

use TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings;

/**
 * Localisation Trait
 *
 * @package T3v\T3vAnnouncements\Domain\Repository\Traits
 */
trait LocalisationTrait {
  /**
   * The life cycle method.
   *
   * @return void
   */
  public function initializeObject() {
    $querySettings = $this->objectManager->get(Typo3QuerySettings::class);
    $querySettings->setIgnoreEnableFields(false);
    $querySettings->setRespectStoragePage(false);
    $querySettings->setRespectSysLanguage(true);

    // Switch by system language UID (Language Fallback Mapping)
    // $sysLanguageUid = $this->languageService->getSysLanguageUid();
    //
    // switch ($sysLanguageUid) {
    //   case 1:
    //     $querySettings->setLanguageUid(0);
    //
    //     break;
    //
    //   case 1:
    //     $querySettings->setLanguageUid(1);
    //
    //     break;
    //
    //   default:
    //     $querySettings->setLanguageUid(0);
    // }

    $this->setDefaultQuerySettings($querySettings);
  }
}