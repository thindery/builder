<?php

class page_addproduct_details extends Page {
	function init(){
        parent::init();

			$m=$this->add('Model_Product')->load($_GET['id']); // makes sure ID is valid
			$this->api->stickyGET('id');  // configures page to carry id= value along
			$crud=$this->add('CRUD');
			$crud->setModel($m->refModel('Pages'));

			if($crud->grid){
				if($crud->grid->addButton('Save')->isClicked()){
				// AJAX action on button click

				$m->set('status','active')->save(); // update status of current product
				$this->js()->univ()->location($this->api->url('..'))->execute();
				// redirect back to parent page
				}

				// You might want a cancel button too
				$crud->grid->addButton('Cancel')->js('click')
				->univ()->location($this->api->url('..'));

				// no AJAX, simple javascript action.
			}

	}
}