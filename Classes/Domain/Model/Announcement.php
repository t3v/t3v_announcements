<?php
namespace T3v\T3vAnnouncements\Domain\Model;

use Cocur\Slugify\Slugify;

use T3v\T3vAnnouncements\Domain\Model\AbstractModel;

/**
 * Announcement Class
 *
 * @package T3v\T3vAnnouncements\Domain\Model
 */
class Announcement extends AbstractModel {
  /**
   * The announcement's name.
   *
   * @var string
   */
  protected $name;

  /**
   * The announcement's label.
   *
   * @var string
   */
  protected $label;

  /**
   * The announcement's publish date.
   *
   * @var DateTime
   */
  protected $publishDate;

  /**
   * The slug generator aka Slugify.
   *
   * @var Cocur\Slugify\Slugify
   * @inject
   */
  protected $slugify;

  /**
   * Returns the announcement's name.
   *
   * @return string The announcement's name
   */
  public function getName() {
    return $this->name;
  }

  /**
   * Sets the announcement's name.
   *
   * @param string $name The announcement's name
   * @return void
   */
  public function setName($name) {
    $this->name = $name;
  }

  /**
   * Returns the announcement's label.
   *
   * @return string The announcement's label
   */
  public function getLabel() {
    $label = $this->label;
    $name  = $this->name;

    if ($label) {
      return $label;
    } else {
      return $name;
    }
  }

  /**
   * Sets the announcement's label.
   *
   * @param string $label The announcement's label
   * @return void
   */
  public function setLabel($label) {
    $this->label = $label;
  }

  /**
   * Returns the announcement's publish date.
   *
   * @return DateTime The announcement's publish date
   */
  public function getPublishDate() {
    $publishDate = $this->publishDate;
    $crdate      = $this->crdate;

    if ($publishDate) {
      return $publishDate;
    } else {
      return $crdate;
    }
  }

  /**
   * Alias for `getPublishDate`.
   *
   * @return DateTime The announcement's publish date
   */
  public function getPublishedAt() {
    return $this->getPublishDate();
  }

  /**
   * Sets the announcement's publish date.
   *
   * @param DateTime $publishDate The announcement's publish date
   * @return void
   */
  public function setPublishDate($publishDate) {
    $this->publishDate = $publishDate;
  }

  /**
   * Returns the announcement's slug.
   *
   * @return string The announcement's slug
   */
  public function getSlug() {
    $name = $this->getName();

    return $this->slugify->slugify($name, '-');
  }

  /**
   * Returns the announcement's sort date.
   *
   * @return DateTime The announcement's sort date
   */
  public function getSortDate() {
    return $this->getPublishDate();
  }
}