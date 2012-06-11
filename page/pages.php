<?php

class page_pages extends Page {
	function init(){
        parent::init();
		
		$crud=$this->add('CRUD')->setModel('Pages');		
		
		//if($form->isSubmitted()){
		//	$form->update();
		//	$form->js()->hide("slow")->execute(); //executes and stops php
		//}
	}
}