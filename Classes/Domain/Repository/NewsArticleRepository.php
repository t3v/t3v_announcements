<?php
namespace T3v\T3vAnnouncements\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\QueryInterface;

use T3v\T3vCore\Domain\Repository\AbstractRepository;

use T3v\T3vAnnouncements\Domain\Repository\Traits\LocalizationTrait;

/**
 * News Article Repository Class
 *
 * @package T3v\T3vAnnouncements\Domain\Repository
 */
class NewsArticleRepository extends AbstractRepository {
  /**
   * Use the localization trait.
   */
  use LocalizationTrait;

  /**
   * The default orderings.
   *
   * @var array
   */
  protected $defaultOrderings = [
    'publishDate' => QueryInterface::ORDER_DESCENDING,
    'sorting'     => QueryInterface::ORDER_ASCENDING
  ];
}