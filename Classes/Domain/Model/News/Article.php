<?php
namespace T3v\T3vAnnouncements\Domain\Model\News;

use TYPO3\CMS\Extbase\Domain\Model\FileReference;

use T3v\T3vAnnouncements\Domain\Model\Announcement;

/**
 * Article Class
 *
 * @package T3v\T3vAnnouncements\Domain\Model
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
   * The article's thumbnail.
   *
   * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
   */
  protected $thumbnail;

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
   * Returns the article's thumbnail.
   *
   * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference The article's thumbnail
   */
  public function getThumbnail() {
    return $this->thumbnail;
  }

  /**
   * Sets the article's thumbnail.
   *
   * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbnail The article's thumbnail
   * @return void
   */
  public function setThumbnail(\TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbnail) {
    $this->thumbnail = $thumbnail;
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