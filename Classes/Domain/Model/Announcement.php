<?php
namespace T3v\T3vAnnouncements\Domain\Model;

use T3v\T3vAnnouncements\Domain\Model\AbstractModel;

/**
 * Announcement Class
 *
 * @package T3v\T3vAnnouncements\Domain\Model
 */
class Announcement extends AbstractModel {
  /**
   * The announcement's publish date.
   *
   * @var DateTime
   */
  protected $publishDate;

  /**
   * Returns the announcement's publish date.
   *
   * @return DateTime The announcement's publish date
   */
  public function getPublishDate() {
    return $this->publishDate;
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
   * Returns the announcement's sort date.
   *
   * @return DateTime The announcement's sort date
   */
  public function getSortDate() {
    $publishDate = $this->getPublishDate();
    $crdate      = $this->getCrdate();

    if ($publishDate) {
      return $publishDate;
    } else {
      return $crdate;
    }
  }
}