<?php

class Model_Product extends Model_Table {
public $entity_code='product';
  function init(){
    parent::init();
 
    $this->addfield('productName');
    $this->addfield('s7location');
	$this->addField('state')->enum(array('active','draft'))->defaultValue('draft'); 
	$this->hasMany('Pages','product_id');
  }
}