<?php



class Consulta extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->mensaje = "";
    }

    function render(){
        $personas = $this->view->datos = $this->model->get();
        $this->view->personas = $personas;
        $this->view->render('consulta/index');
    }

    function verPersona($param = null){
        $idpersona = $param[0];
        $persona = $this->model->getById($idpersona);

        //session_start();
        $_SESSION["id_verPersona"] = $persona->nro_documento;

        $this->view->persona = $persona;
        //$this->view->render('consulta/detalle');
        $this->view->render('nuevo/index');
    }

    function actualizarPersona($param = null){
        //session_start();
        $nro_documento = $_SESSION["id_verPersona"];
        $ROL_idROL=$_POST['ROL_idROL'];
        $Documento_idDocumento=$_POST['Documento_idDocumento'];
        $nro_documento=$_POST['nro_documento'];
        $Nombre    = $_POST['Nombre'];
        $Apellidos  = $_POST['Apellidos'];
        $Celular =$_POST['Celular'];
        $Direccion=$_POST['Direccion'];
        $Correo=$_POST['Correo'];
        $Usuario=$_POST['Usuario'];
        $Contrasena=md5($_POST['Contrasena']);
     


        unset($_SESSION['id_verPersona']);
        $atributosModificar = [ 'Documento_idDocumento' => $Documento_idDocumento,'ROL_idROL'=>$ROL_idROL ,'nro_documento' => $nro_documento, 'Nombre' => $Nombre, 'Apellidos' => $Apellidos, 'Celular' =>$Celular, 'Direccion'=> $Direccion ,'Correo'=> $Correo,'Usuario'=>$Usuario];
        if($Contrasena != "")
            $atributosModificar['Contrasena'] =  $Contrasena;
        var_dump($atributosModificar);
        if($this->model->update($atributosModificar)){
            $persona = new Persona();
            $persona->ROL_idROL=$ROL_idROL;
            $persona->Documento_idDocumento = $Documento_idDocumento;
            $persona->nro_documento = $nro_documento;
            $persona->Nombre = $Nombre;
            $persona->Apellidos = $Apellidos;
            $persona->Celular=$Celular;
            $persona->Direccion=$Direccion;
            $persona->Correo=$Correo;
            $persona->Usuario=$Usuario;
            $persona->Contrasena=$Contrasena;
            


            $this->view->persona = $persona;
            $this->view->mensaje = "Registro actualizado correctamente";
        }else{
            $this->view->mensaje = "No se pudo actualizar registro";
        }
        header('Location: ' .  constant('URL') . 'consulta');
        exit;
    }

    function eliminarPersona($param = null){
        $nro_documento = $param[2];

        if($this->model->delete($nro_documento)){
            $mensaje ="Registro eliminado correctamente";
          
        }else{
            $mensaje = "No se pudo eliminar al registro";
          
        }

       

        echo $mensaje;
    }
    
   
  
}
