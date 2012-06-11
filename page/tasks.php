<?php
class page_tasks extends Page {
	function init(){
        parent::init();
		
		$this->api->auth->check();
		
		$user=$this->api->auth->get('name');
		
		$this->add('Text')->set('Welcome, '.$user);
		
		$form=$this->add('Form');
		$form->addField('line','new_task');
		
		$this->add('CRUD')->setModel('Task_Mine');
	}
}