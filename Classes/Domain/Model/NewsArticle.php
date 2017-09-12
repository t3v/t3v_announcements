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
   * The news article's name.
   *
   * @var string
   */
  protected $name;

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
   * The news article's label.
   *
   * @var string
   */
  protected $label;

  /**
   * Constructs a new article.
   */
  public function __construct() {
    $this->thumbnails = new ObjectStorage();
  }

  /**
   * Returns the news article's name.
   *
   * @return string The news article's name
   */
  public function getName() {
    return $this->name;
  }

  /**
   * Sets the news article's name.
   *
   * @param string $name The news article's name
   * @return void
   */
  public function setName($name) {
    $this->name = $name;
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
   * Returns all thumbnails belonging to the article.
   *
   * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
   */
  public function getThumbnails() {
    return $this->thumbnails;
  }

  /**
   * Adds a thumbnail to the article.
   *
   * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbnail The thumbnail to be added
   * @return void
   */
  public function addThumbnail(\TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbnail) {
    $this->thumbnails->attach($thumbnail);
  }

  /**
   * Removes a thumbnail from article.
   *
   * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbnail The thumbnail to be removed
   * @return void
   */
  public function removeThumbnail(\TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbnail) {
    $this->thumbnails->detach($thumbnail);
  }

  /**
   * Removes all thumbnails from the article.
   *
   * @return void
   */
  public function removeAllThumbnails() {
    $this->thumbnails = new ObjectStorage();
  }

  /**
   * Returns the news article's label.
   *
   * @return string The news article's label
   */
  public function getLabel() {
    return $this->label;
  }

  /**
   * Sets the news article's label.
   *
   * @param string $label The news article's label
   * @return void
   */
  public function setLabel($label) {
    $this->label = $label;
  }
}