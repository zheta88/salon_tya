<?php

class Consultaempleado extends Controller{

    function __construct(){
        parent::__construct();

    }

    function render(){
        $this->view->render('consultaempleado/index');
    }

  
}

?>