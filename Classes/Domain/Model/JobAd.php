<?php
namespace T3v\T3vAnnouncements\Domain\Model;

use T3v\T3vAnnouncements\Domain\Model\Announcement;

/**
 * Job Ad Class
 *
 * @package T3v\T3vAnnouncements\Domain\Model
 */
class JobAd extends Announcement {
  /**
   * The job ad's name.
   *
   * @var string
   */
  protected $name;

  /**
   * The job ad's label.
   *
   * @var string
   */
  protected $label;

  /**
   * The job ad's task.
   *
   * @var string
   */
  protected $task;

  /**
   * The jobs's from date.
   *
   * @var DateTime
   */
  protected $fromDate;

  /**
   * The job ad's type.
   *
   * @var string
   */
  protected $type;

  /**
   * The job ad's custom type.
   *
   * @var string
   */
  protected $customType;

  /**
   * The job ad's description.
   *
   * @var string
   */
  protected $description;

  /**
   * Returns the job ad's name.
   *
   * @return string The job ad's name
   */
  public function getName() {
    return $this->name;
  }

  /**
   * Sets the job ad's name.
   *
   * @param string $name The job ad's name
   * @return void
   */
  public function setName($name) {
    $this->name = $name;
  }

  /**
   * Returns the job ad's label.
   *
   * @return string The job ad's label
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
   * Sets the job ad's label.
   *
   * @param string $label The job ad's label
   * @return void
   */
  public function setLabel($label) {
    $this->label = $label;
  }

  /**
   * Returns the job ad's task.
   *
   * @return string The job ad's task
   */
  public function getTask() {
    return $this->task;
  }

  /**
   * Sets the job ad's task.
   *
   * @param string $task The job ad's task
   * @return void
   */
  public function setTask($task) {
    $this->task = $task;
  }

  /**
   * Returns the job ad's from date.
   *
   * @return DateTime The job ad's from date
   */
  public function getFromDate() {
    return $this->fromDate;
  }

  /**
   * Sets the job ad's from date.
   *
   * @param DateTime $fromDate The job ad's from date
   * @return void
   */
  public function setFromDate($fromDate) {
    $this->fromeDate = $fromeDate;
  }

  /**
   * Returns the job ad's type.
   *
   * @return string The job ad's type
   */
  public function getType() {
    return $this->type;
  }

  /**
   * Sets the job ad's type.
   *
   * @param string $type The job ad's type
   * @return void
   */
  public function setType($type) {
    $this->type = $type;
  }

  /**
   * Returns the job ad's custom type.
   *
   * @return string The job ad's custom type
   */
  public function getCustomType() {
    return $this->customType;
  }

  /**
   * Sets the job ad's custom type.
   *
   * @param string $customType The job ad's custom type
   * @return void
   */
  public function setCustomType($customType) {
    $this->customType = $customType;
  }

  /**
   * Returns the job ad's description.
   *
   * @return string The job ad's description
   */
  public function getDescription() {
    return $this->description;
  }

  /**
   * Sets the job ad's description.
   *
   * @param string $description The job ad's description
   * @return void
   */
  public function setDescription($description) {
    $this->description = $description;
  }
}