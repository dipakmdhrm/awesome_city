<?php

namespace Drupal\awesome_city\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form controller for Awesome City edit forms.
 *
 * @ingroup awesome_city
 */
class AwesomeCityForm extends ContentEntityForm {

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    /* @var $entity \Drupal\awesome_city\Entity\AwesomeCity */
    $form = parent::buildForm($form, $form_state);

    $entity = $this->entity;

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $entity = &$this->entity;

    $status = parent::save($form, $form_state);

    switch ($status) {
      case SAVED_NEW:
        drupal_set_message($this->t('Created the %label Awesome City.', [
          '%label' => $entity->label(),
        ]));
        break;

      default:
        drupal_set_message($this->t('Saved the %label Awesome City.', [
          '%label' => $entity->label(),
        ]));
    }
    $form_state->setRedirect('entity.awesome_city.canonical', ['awesome_city' => $entity->id()]);
  }

}
