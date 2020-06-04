<?php

require 'models/persona.php';

class ConsultaModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function get(){
        $items = [];
        try{
            $query = $this->db->connect()->query('SELECT * FROM personas');
            
            while($row = $query->fetch()){
                $item = new Persona();
                $item->idPersonas =$row['idpersonas'];
                $item->ROL_idROL =$row['rol_idrol'];
                $item->Documento_idDocumento = $row['documento_iddocumento'];
                $item->nro_documento =$row['nro_documento'];
                $item->Nombre    = $row['nombre'];
                $item->Apellidos  = $row['apellidos'];
                $item->Celular =$row ['celular'];
                $item->Direccion =$row['direccion'];
                $item->Correo =$row['correo'];
                $item->Usuario =$row['usuario'];
                $item->Contrasena=$row['contrasena'];
               

                array_push($items, $item);
            }
            return $items;
        }catch(PDOException $e){
            return [];
        }
    }

    public function getById($id){
        $item = new Persona();
        try{
            $query = $this->db->connect()->prepare('SELECT * FROM personas WHERE nro_documento = :id');

            $query->execute(['id' => $id]);
            
            while($row = $query->fetch()){
                $item->idPersonas =$row['idpersonas'];
                $item->ROL_idROL =$row['rol_idrol'];
                $item->Documento_idDocumento = $row['documento_iddocumento'];
                $item->nro_documento =$row['nro_documento'];
                $item->Nombre    = $row['nombre'];
                $item->Apellidos  = $row['apellidos'];
                $item->Celular =$row['celular'];
                $item->Direccion =$row['direccion'];
                $item->Correo =$row['correo'];
                $item->Usuario=$row['usuario'];
                $item->Contrasena =$row['contrasena'];
                
            }
            return $item;
        }catch(PDOException $e){
            return null;
        }
    }

    public function update($item){
        $query = $this->db->connect()->prepare('UPDATE personas SET ROL_idROL=:ROL_idROL,Nombre = :Nombre, Apellidos = :Apellidos, Celular =:Celular, Direccion = :Direccion, Correo = :Correo,Usuario =:Usuario, Contrasena = :Contrasena, Documento_idDocumento = :Documento_idDocumento  WHERE nro_documento = :nro_documento');
        try{
            $query->execute([
                'ROL_idROL'=>$item ['ROL_idROL'],
                'Documento_idDocumento' => $item['Documento_idDocumento'],
                'nro_documento' => $item['nro_documento'],
                'Nombre' => $item['Nombre'],
                'Apellidos' => $item['Apellidos'],
                'Celular' =>$item['Celular'],
                'Direccion' =>$item ['Direccion'],
                'Correo' =>$item ['Correo'],
                'Usuario' =>$item ['Usuario'],
                'Contrasena'=>$item ['Contrasena']              
                
            ]);
            return true;
        }catch(PDOException $e){
            echo $e;
            return false;
        }
    }

    public function delete($id){
        
        $query = $this->db->connect()->prepare('DELETE FROM personas WHERE nro_documento = :nro_documento');
        try{
            $query->execute([
                'nro_documento' => $id
            ]);
            return true;
        }catch(PDOException $e){
          
            return false;
        }
    }

  
}
?>