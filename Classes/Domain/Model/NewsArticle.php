<?php
namespace T3v\T3vAnnouncements\Domain\Model;

use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

use T3v\T3vAnnouncements\Domain\Model\Announcement;

/**
 * News Article Class
 *
 * @package T3v\T3vAnnouncements\Domain\Model
 */
class NewsArticle extends Announcement {
  /**
   * The news article's abstract.
   *
   * @var string
   */
  protected $abstract;

  /**
   * The news article's thumbnails.
   *
   * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
   * @lazy
   * @cascade remove
   */
  protected $thumbnails;

  /**
   * Constructs a new news article.
   */
  public function __construct() {
    parent::__construct();

    $this->thumbnails = new ObjectStorage();
  }

  /**
   * Returns the news article's abstract.
   *
   * @return string The news article's abstract
   */
  public function getAbstract() {
    return $this->abstract;
  }

  /**
   * Sets the news article's abstract.
   *
   * @param string $abstract The news article's abstract
   * @return void
   */
  public function setAbstract($abstract) {
    $this->abstract = $abstract;
  }

  /**
   * Returns all thumbnails belonging to the news article.
   *
   * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> The news article's thumbnails
   */
  public function getThumbnails() {
    return $this->thumbnails;
  }

  /**
   * Adds a thumbnail to the news article.
   *
   * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbnail The thumbnail to be added
   * @return void
   */
  public function addThumbnail(\TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbnail) {
    $this->thumbnails->attach($thumbnail);
  }

  /**
   * Removes a thumbnail from the news article.
   *
   * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbnail The thumbnail to be removed
   * @return void
   */
  public function removeThumbnail(\TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbnail) {
    $this->thumbnails->detach($thumbnail);
  }

  /**
   * Removes all thumbnails from the news article.
   *
   * @return void
   */
  public function removeAllThumbnails() {
    $this->thumbnails = new ObjectStorage();
  }
}