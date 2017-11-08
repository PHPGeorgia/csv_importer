<?php

namespace Drupal\csv_importer\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Defines a importer item annotation object.
 *
 * @see \Drupal\csv_importer\Plugin\ImporterManager
 * @see plugin_api
 *
 * @Annotation
 */
class Importer extends Plugin {

  /**
   * The plugin ID.
   *
   * @var string
   */
  public $id;

  /**
   * The entity type.
   *
   * @var string
   */
  public $entity_type;

  /**
   * The label of the plugin.
   *
   * @var \Drupal\Core\Annotation\Translation
   *
   * @ingroup plugin_translatable
   */
  public $label;

}