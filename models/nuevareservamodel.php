<?php


class Nuevareservamodel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function insert($datos){
       

        // insertar
        $query = $this->db->connect()->prepare('INSERT INTO reservas (cliente,servicios_idservicios,empleado,fecha,hora,observaciones,precio) 
        VALUES(:cliente,:servicios_idservicios, :empleado, :fecha, :hora, :observaciones, :precio)');
        try{
            $query->execute([
                'cliente'=>$datos['cliente'],
                'servicios_idservicios' => $datos['servicios_idservicios'],
                'empleado' => $datos['empleado'],
                'fecha' => $datos['fecha'],
                'hora'=>$datos['hora'],
                'observaciones'=>$datos['observaciones'],
                'precio'=>$datos['precio']            
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
    public function reserva(){
        $item = array();
        try{
            $query = $this->db->connect()->prepare('SELECT * FROM reservas');

            $query->execute();
            $i=0;
            
            while($row = $query->fetch()){
                
                $item[$row['cliente'] . "-" . $row['fecha'] . "-" . $row['hora']]=$row;
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