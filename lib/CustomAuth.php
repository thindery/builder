<?php
class CustomAuth extends BasicAuth {
    function init(){
        parent::init();
        $this->setModel('Model_User','email','password');
        //1st param is the model that contains user info, 2nd param is the username field, 3rd param is the password field

    }
}