<?php

class Model_Task extends Model_Table {
public $entity_code='task';
  function init(){
    parent::init();
	
	$this->addField('name');
	
	$this->addField('descr')->type('text');
	$this->addField('due_date')->type('date');
	$this->addField('user_id')->refModel('Model_User');;
  }
}
	