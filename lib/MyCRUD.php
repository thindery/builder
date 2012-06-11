<?php

class MyCRUD extends CRUD {
    function formSubmitSuccess(){
        if($_GET['id']) return parent::formSubmitSuccess(); // edit ->save

        // add ->save handled here
        $this->js()->univ()->location($this->api->url('./details',
          array('id'=>$this->form->model->id)))->execute();
    }
}