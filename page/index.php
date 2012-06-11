<?php
class page_index extends Page {
    function init(){		
        parent::init();

		if($this->api->auth->isLoggedIn())
			$this->api->redirect('setup');
		
		$crud=$this->add('CRUD')->setModel('User', array('email','name'));
		
		

		


    }
}
