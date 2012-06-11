<?php

class page_addproduct extends Page {
	function init(){
        parent::init();
		
		$crud=$this->add('MyCRUD')->setModel('Product');
		
		
		//if($form->isSubmitted()){
		//	$form->update();
		//	$form->js()->hide("slow")->execute(); //executes and stops php
		//}
		
		$this->add('MyCRUD')->setModel('Product')->addCondition('state','active');
	}
}