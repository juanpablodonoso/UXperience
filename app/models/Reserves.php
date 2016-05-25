<?php

class Reserves extends Model{
    static function all(){
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM RESERVES');

        foreach($req->fetchAll() as $r){
            $list[] = new Reserve($r['id'],$r['F_entrada'],$r['F_salida'],$r['num_Habitacion'],$r['num_adultos'],$r['num_niños'],$r['Cod_Promocion'],$r['nombre'],$r['Apellidos'],$r['Pais'],$r['telefono'],$r['Email'],$r['Observaciones'],$r['TitularTarjeta'],$r['TipoTarjeta'],$r['NumTarjeta'],$r['Caducidad'],$r['CVC']);
        }
        return $list;
    }

    static function find($id){
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM RESERVES WHERE ID='%$id%'');
        return $req;
    }

    static function delete($id){
        $db = Db::getInstance();
        return $db->query('DELETE FROM RESERVES WHERE ID=\'%$id%\'');
    }

    static function update(){

    }

    static function save($reserve){

    }
}