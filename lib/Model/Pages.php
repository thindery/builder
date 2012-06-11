<?php

class Model_Pages extends Model_Table {
public $entity_code='pages';
  function init(){
    parent::init();
 
	$this->addfield('product_id');
    $this->addfield('pageName');
    $this->addfield('pageOrder');
	$this->addfield('isBlank');
  }
}