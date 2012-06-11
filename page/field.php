<?php

class page_field extends Page {
	function init(){
        parent::init();
		
		$crud=$this->add('CRUD')->setModel('Field');
		
		
		//if($form->isSubmitted()){
		//	$form->update();
		//	$form->js()->hide("slow")->execute(); //executes and stops php
		//}
	}
}