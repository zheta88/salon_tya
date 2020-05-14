<?php

class Nuevareserva extends Controller{


    function __construct(){
        parent::__construct();
        $this->view->mensaje="";
        
    }

    function render(){
       
        $this->view->render('nuevareserva/index');
    }

    function crear(){
        $Cliente=$_POST['Cliente'];
        $servicio = $_POST['SERVICIOS_idSERVICIOS'];
        $Empleado    = $_POST['Empleado'];
        $fecha  = $_POST['Fecha'];
        $hora =$_POST['Hora'];
        $observaciones=$_POST['Observaciones'];
        $precio=$_POST['Precio'];

        
        if($this->model->insert(['Cliente'=>$Cliente,'SERVICIOS_idSERVICIOS' =>$servicio,
         'Empleado' =>$Empleado, 'Fecha' =>$fecha , 'Hora' =>$hora, 
         'Observaciones'=>$observaciones ,'Precio'=>$precio])){
 
            $this->view->mensaje = "Registro creado correctamente";
            $this->view->render('nuevareserva/index');
        }else{
            $this->view->mensaje = "Persona ya está registrada";
            $this->view->render('nuevareserva/index');
        }

    }

}

?>