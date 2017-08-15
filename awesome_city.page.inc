<?php

/**
 * @file
 * Contains awesome_city.page.inc.
 *
 * Page callback for Awesome City entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Awesome City templates.
 *
 * Default template: awesome_city.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_awesome_city(array &$variables) {
  // Fetch AwesomeCity Entity Object.
  $awesome_city = $variables['elements']['#awesome_city'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
