<?php

class reporte extends Controller{
    function __construct(){
        parent::__construct();
    }

    function render(){
        $this->view->render('reportes/index');
    }


    

}
 