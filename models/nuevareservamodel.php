<?php


class Nuevareservamodel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function insert($datos){
       

        // insertar
        $query = $this->db->connect()->prepare('INSERT INTO reservas (Cliente,SERVICIOS_idSERVICIOS,Empleado,Fecha,Hora,Observaciones,Precio) 
        VALUES(:Cliente,:SERVICIOS_idSERVICIOS, :Empleado, :Fecha, :Hora, :Observaciones, :Precio)');
        try{
            $query->execute([
                'Cliente'=>$datos['Cliente'],
                'SERVICIOS_idSERVICIOS' => $datos['SERVICIOS_idSERVICIOS'],
                'Empleado' => $datos['Empleado'],
                'Fecha' => $datos['Fecha'],
                'Hora'=>$datos['Hora'],
                'Observaciones'=>$datos['Observaciones'],
                'Precio'=>$datos['Precio']            
            ]);
            return true;
        }catch(PDOException $e){
            print_r($query->errorInfo());
            return false;
        }
    }
        
    public function getservicio(){
        $item = array();
        try{
            $query = $this->db->connect()->prepare('SELECT * FROM servicios');

            $query->execute();
            $i=0;
            
            while($row = $query->fetch()){
                $item[$i]=$row;
                $i++;   
            }
            return $item;
        }catch(PDOException $e){
            return null;
        }
    }
    public function getempleado(){
        $item = array();
        try{
            $query = $this->db->connect()->prepare('SELECT * FROM personas where ROL_idROL=3');

            $query->execute();
            $i=0;
            
            while($row = $query->fetch()){
                $item[$i]=$row;
                $i++;   
            }
            return $item;
        }catch(PDOException $e){
            return null;
        }
    }
    public function getcliente(){
        $item = array();
        try{
            $query = $this->db->connect()->prepare('SELECT * FROM personas where ROL_idROL=2');

            $query->execute();
            $i=0;
            
            while($row = $query->fetch()){
                $item[$i]=$row;
                $i++;   
            }
            return $item;
        }catch(PDOException $e){
            return null;
        }
    }
        
}

?>