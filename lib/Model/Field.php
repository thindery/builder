<?php

class Model_Field extends Model_Table {
public $entity_code='field';
  function init(){
    parent::init();
 
    $this->addfield('fieldName');
    $this->addfield('fieldType');
	$this->addfield('fieldDefaultValue');
  }
}