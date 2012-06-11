<?php

class Form_ContactForm extends Form {
    function init(){
        parent::init();

        $this->addField('Line','name');
        $this->addField('Line','surname');
        $this->addSubmit('Send');
    }
}

?>