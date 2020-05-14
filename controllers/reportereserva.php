<?php

class reportereserva extends Controller{
    function __construct(){
        parent::__construct();
    }

    function render(){
        $this->view->render('reportereserva/index');
    }


    

}