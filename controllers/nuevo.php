<?php

class Nuevo extends Controller{


    function __construct(){
        parent::__construct();
        $this->view->mensaje="";
        
    }

    function render(){
       
        $this->view->render('nuevo/index');
    }

    function crear(){
        $ROL_idROL=$_POST['ROL_idROL'];
        $Documento_idDocumento = $_POST['Documento_idDocumento'];
        $nro_documento = $_POST['nro_documento'];
        $Nombre    = $_POST['Nombre'];
        $Apellidos  = $_POST['Apellidos'];
        $Celular =$_POST['Celular'];
        $Direccion=$_POST['Direccion'];
        $Correo=$_POST['Correo'];
        $usuario=$_POST['Usuario'];
        $Contrasena=md5($_POST['Contrasena']);


        if($this->model->insert(['ROL_idROL'=>$ROL_idROL,'Documento_idDocumento' =>$Documento_idDocumento, 'Nombre' =>$Nombre, 'Apellidos' =>$Apellidos , 'Celular' =>$Celular, 'Direccion'=>$Direccion ,'Correo'=>$Correo, 'Usuario'=>$usuario,'Contrasena'=>$Contrasena,'nro_documento'=>$nro_documento])){
 
            $this->view->mensaje = "Registro creado correctamente";
            $this->view->render('nuevo/index');
        }else{
            $this->view->mensaje = "Persona ya está registrada";
            $this->view->render('nuevo/index');
        }

    }

}

?>