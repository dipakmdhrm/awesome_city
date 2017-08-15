<?php

namespace Drupal\awesome_city\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Awesome City entities.
 *
 * @ingroup awesome_city
 */
interface AwesomeCityInterface extends  ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Awesome City name.
   *
   * @return string
   *   Name of the Awesome City.
   */
  public function getName();

  /**
   * Sets the Awesome City name.
   *
   * @param string $name
   *   The Awesome City name.
   *
   * @return \Drupal\awesome_city\Entity\AwesomeCityInterface
   *   The called Awesome City entity.
   */
  public function setName($name);

  /**
   * Gets the Awesome City creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Awesome City.
   */
  public function getCreatedTime();

  /**
   * Sets the Awesome City creation timestamp.
   *
   * @param int $timestamp
   *   The Awesome City creation timestamp.
   *
   * @return \Drupal\awesome_city\Entity\AwesomeCityInterface
   *   The called Awesome City entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Awesome City published status indicator.
   *
   * Unpublished Awesome City are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Awesome City is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Awesome City.
   *
   * @param bool $published
   *   TRUE to set this Awesome City to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\awesome_city\Entity\AwesomeCityInterface
   *   The called Awesome City entity.
   */
  public function setPublished($published);

}
