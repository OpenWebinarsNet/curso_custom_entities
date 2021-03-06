<?php

namespace Drupal\course;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;

/**
 * Class CourseTypeListBuilder.
 */
class CourseTypeListBuilder extends EntityListBuilder {

  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['label'] = $this->t('Label');
    $header['id'] = $this->t('Machine name');
    $header['contentType'] = $this->t('Course type associated');

    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var  \Drupal\course\Entity\CourseType $entity */
    $row['label'] = $entity->label();
    $row['id'] = $entity->id();
    $row['contentType'] = $entity->getContentType();

    return $row + parent::buildRow($entity);
  }
}