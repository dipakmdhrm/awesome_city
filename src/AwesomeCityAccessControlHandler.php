<?php

namespace Drupal\awesome_city;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Awesome City entity.
 *
 * @see \Drupal\awesome_city\Entity\AwesomeCity.
 */
class AwesomeCityAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\awesome_city\Entity\AwesomeCityInterface $entity */
    switch ($operation) {
      case 'view':
        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished awesome city entities');
        }
        return AccessResult::allowedIfHasPermission($account, 'view published awesome city entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit awesome city entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete awesome city entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add awesome city entities');
  }

}
