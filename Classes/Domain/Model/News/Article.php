<?php
namespace T3v\T3vAnnouncements\Domain\Model\News;

use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

use T3v\T3vAnnouncements\Domain\Model\Announcement;

/**
 * Article Class
 *
 * @package T3v\T3vAnnouncements\Domain\Model\News
 */
class Article extends Announcement {
  const TYPE = 'NEWS_ARTICLE';

  /**
   * The article's name.
   *
   * @var string
   */
  protected $name;

  /**
   * The article's abstract.
   *
   * @var string
   */
  protected $abstract;

  /**
   * The article's thumbnails.
   *
   * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
   * @lazy
   * @cascade remove
   */
  protected $thumbnails;

  /**
   * The article's label.
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
   * Returns the article's name.
   *
   * @return string The article's name
   */
  public function getName() {
    return $this->name;
  }

  /**
   * Sets the article's name.
   *
   * @param string $name The article's name
   * @return void
   */
  public function setName($name) {
    $this->name = $name;
  }

  /**
   * Returns the article's abstract.
   *
   * @return string The article's abstract
   */
  public function getAbstract() {
    return $this->abstract;
  }

  /**
   * Sets the article's abstract.
   *
   * @param string $abstract The article's abstract
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
   * Returns the article's label.
   *
   * @return string The article's label
   */
  public function getLabel() {
    return $this->label;
  }

  /**
   * Sets the article's label.
   *
   * @param string $label The article's label
   * @return void
   */
  public function setLabel($label) {
    $this->label = $label;
  }

  /**
   * Returns the article's type.
   *
   * @return string The article's type
   */
  public function getType() {
    return self::TYPE;
  }
}