<?php

class page_setup extends Page {
	function init(){
        parent::init();
		$this->api->auth->check();
		$user=$this->api->auth->get('username');
		$this->add('Text')->set('Welcome, '.$user);
	}
}