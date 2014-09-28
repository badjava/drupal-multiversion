<?php

namespace Drupal\multiversion\Plugin\Field\FieldType;

use Drupal\Core\Field\FieldItemList;

class LocalSequenceItemList extends FieldItemList {

  public function preSave() {
    $this->get(0)->value = microtime(TRUE);
    parent::preSave();
  }
}
