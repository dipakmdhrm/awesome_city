<?php

namespace Drupal\awesome_city;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Link;

/**
 * Defines a class to build a listing of Awesome City entities.
 *
 * @ingroup awesome_city
 */
class AwesomeCityListBuilder extends EntityListBuilder {


  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('Awesome City ID');
    $header['name'] = $this->t('Name');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\awesome_city\Entity\AwesomeCity */
    $row['id'] = $entity->id();
    $row['name'] = Link::createFromRoute(
      $entity->label(),
      'entity.awesome_city.edit_form',
      ['awesome_city' => $entity->id()]
    );
    return $row + parent::buildRow($entity);
  }

}
