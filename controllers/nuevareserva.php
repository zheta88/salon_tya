<?php

class Nuevareserva extends Controller{


    function __construct(){
        parent::__construct();
        $this->view->mensaje="";
        
    }

    function render(){
       
        $this->view->render('nuevareserva/index');
    }

    function crearReserva(){
        $Cliente=$_POST['Cliente'];
        $servicio = $_POST['SERVICIOS_idSERVICIOS'];
        $Empleado    = $_POST['Empleado'];
        $fecha  = $_POST['fecha'];
        $hora =$_POST['hora'];
        $observaciones=$_POST['observaciones'];
        $precio=$_POST['precio'];

        
        if($this->model->insert(['cliente'=>$Cliente,'servicios_idservicios' =>$servicio,
         'empleado' =>$Empleado, 'fecha' =>$fecha , 'hora' =>$hora, 
         'observaciones'=>$observaciones ,'precio'=>$precio])){
 
            $this->view->mensaje = "Registro creado correctamente";
            $this->view->render('nuevareserva/index');
        }else{
            $this->view->mensaje = "Persona ya está registrada";
            $this->view->render('nuevareserva/index');
        }

    }

}

?>