<?php

class Errores extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje = "Error al cargar la página";
        $this->view->render('errores/index');

    }
}
?>