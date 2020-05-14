<?php

class Success extends Controller{

    function __construct(){
        parent::__construct();
        
        //echo "Error al cargar el recurso";
    }

    function nuevoPersona(){
        $this->view->mensaje = "Nuevo persona creado correctamente";
        $this->view->render('success/index');
    }
}
?>