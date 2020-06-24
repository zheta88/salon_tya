<?php

require 'models/reserva.php';

session_start();

class Consultareservamodel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function get(){
        $items = [];
        try{
            $consulta = 'SELECT servicios.Tipo_servicio AS SERVICIO,pc.Nombre AS EMPLEADO,pe.Nombre AS CLIENTE, RESERVAS.Fecha,reservas.Hora,RESERVAS.Precio,RESERVAS.Observaciones
            FROM RESERVAS
           INNER JOIN servicios ON servicios.idSERVICIOS=reservas.SERVICIOS_idSERVICIOS
           INNER JOIN personas as pc on pc.idPersonas=reservas.Cliente
           INNER JOIN personas as pe on pe.idPersonas=reservas.Empleado 
           ';
           
           if($_SESSION['rol'] !="1")
            $consulta .= ' WHERE Empleado=' . $_SESSION['idPersonas'] . ' OR Cliente=' . $_SESSION['idPersonas'];
           
          

            

            $query = $this->db->connect()->query($consulta);
            
            while($row = $query->fetch()){
                $item = new Reserva();
                // $item->idRESERVAS=$row['idRESERVAS'];
                $item->Cliente    = $row['cliente'];
                $item->Empleado =$row['empleado'];
                $item->servicio = $row['servicio'];  
                $item->fecha  = $row['fecha'];
                $item->hora =$row ['hora'];
                $item->observaciones =$row['observaciones'];
                $item->precio =$row['precio'];
                // var_dump($observaciones);
                // var_dump($SERVICIOS_idSERVICIOS);
                // var_dump($Cliente);
                array_push($items, $item);
            }
            return $items;
        }catch(PDOException $e){
            return [];
        }
    }

    public function getById($id){
        $item = new Reserva();
        try{
            $query = $this->db->connect()->prepare('SELECT * FROM reservas WHERE idreservas= :id');
          
            $query->execute(['id' => $id]);
            
            while($row = $query->fetch()){
                $item->Cliente =$row['cliente'];
                $item->Empleado   = $row['empleado'];
                $item->servicio = $row['servicios_idservicios'];
                $item->fecha  = $row['fecha'];
                $item->hora =$row['hora'];
                $item->observaciones =$row['observaciones'];
                $item->precio =$row['precio'];
               
            }
            return $item;
        }catch(PDOException $e){
            return null;
        }
    }

    public function update($item){
        $query = $this->db->connect()->prepare('UPDATE reservas SET Cliente=:Cliente,
        SERVICIOS_idSERVICIOS = :SERVICIOS_idSERVICIOS, Empleado = :Empleado,
         Fecha =:Fecha, Hora = :Hora, Observaciones = :Observaciones,Precio =:Precio
        WHERE SERVICIOS_idSERVICIOS = :SERVICIOS_idSERVICIOS');
        try{
            $query->execute([
                'Cliente'=>$item ['Cliente'],
                'SERVICIOS_idSERVICIOS' => $item['SERVICIOS_idSERVICIOS'],
                'Empleado' => $item['Empleado'],
                'Fecha' => $item['Fecha'],
                'Hora' =>$item['Hora'],
                'Observaciones' =>$item ['Observaciones'],
                'Precio' =>$item ['Precio'],
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
    }

    public function delete($id){
        $query = $this->db->connect()->prepare('DELETE FROM reservas WHERE idRESERVAS = :idRESERVAS');
        try{
            $query->execute([
                'idRESERVAS' => $id
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
    }

  
}
?>