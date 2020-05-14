<?php

class Empleado extends Controller{
    function __construct(){
        parent::__construct();

    }

    function render(){
        $this->view->render('empleado/index');
    }

   
  
}

?>