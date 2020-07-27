<?php



class Consultareserva extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->mensaje = "";
    }

    function render(){
        $reservas = $this->view->datos = $this->model->get();
        $this->view->reservas = $reservas;
        $this->view->render('consultareservas/index');
    }

    function verReserva($param = null){
        $idreserva = $param[0];
    
        $reserva = $this->model->getById($idreserva);

        //session_start();
        $_SESSION["id_verReserva"] = $reserva->servicio;

        $this->view->reserva = $reserva;
        $this->view->render('consultareservas/detallereserva');
    }

    function actualizarReserva($param = null){
       // session_start();
        $servicio = $_SESSION["id_verReserva"];
        $Cliente=$_POST['C  liente'];
        $Empleado   = $_POST['Empleado'];
        $fecha=$_POST['Fecha'];
        $hora=$_POST['Hora'];
        $observaciones =$_POST['Observaciones'];
        $precio=$_POST['Precio'];
        
     


        unset($_SESSION['id_verReserva']);

        if($this->model->update([ 'PERSONAS_idpersonas'=>$personas_idpersonas,'SERVICIOS_idSERVICIOS'=>$servicio,
        'Rol_Personas_idRol_Personas'=>$Empleado,'Fecha'=>   $fecha,'Hora'=>$hora,'Observaciones'=>$observaciones,
        'Precio'=>$precio])){
            $reserva = new Reserva();
            $reserva->personas_idpersonas=$personas_idpersonas;
            $reserva->servicio = $servicio;
            $reserva->rol_personas = $Empleado;
            $reserva->fecha = $fecha;
            $reserva->hora=$hora;
            $reserva->observaciones=$observaciones;
            $reserva->precio=$precio;
           


            $this->view->reserva = $reserva;
            $this->view->mensaje = "Registro actualizado correctamente";
        }else{
            $this->view->mensaje = "No se pudo actualizar registro";
        }
        $this->view->render('consultareserva/detalle');
    }

    function eliminarReserva($param = null){
        $idRESERVAS = $param[0];

        if($this->model->delete($idRESERVAS)){
            $mensaje ="Registro eliminado correctamente";
          
        }else{
            $mensaje = "No se pudo eliminar al registro";
          
        }

       

        echo $idRESERVAS;       
    }
    
   
  
}
