<?php

namespace Drupal\course;

use Drupal\Core\Entity\ContentEntityTypeInterface;
use Drupal\Core\Entity\Sql\SqlContentEntityStorageSchema;

/**
 * Defines the course schema handler.
 */
class CourseStorageSchema extends SqlContentEntityStorageSchema {

  /**
   * {@inheritdoc}
   */
  protected function getEntitySchema(ContentEntityTypeInterface $entity_type, $reset = FALSE) {
    $schema = parent::getEntitySchema($entity_type, $reset);
    /*
     * Element availables in $schema['courses'] :
     *  - indexes
     *  - primary key
     *  - fields
     *  - unique keys
     *  - foreign keys
     */

    $schema['course_field_data']['indexes'] += [
      'course__title' => ['title'],
    ];

    return $schema;
  }
}