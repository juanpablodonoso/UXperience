<?php

class Rooms extends Model{
    static function all(){
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM ROOMS');

        foreach($req->fetchAll() as $r){
            $list[] = new Room($r['id'],$r['type'],$r['room_number']);
        }
        return $list;
    }

    static function find($id){
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM ROOMS WHERE ID = '%$id%'');
        return $req;
    }

    static function delete($id){
        $db = Db::getInstance();
        return $db->query('DELETE FROM ROOMS WHERE ID = \'%$id%\'');
    }

    static function update(){
        $db = Db::getInstance();
        return $db->query('UPDATE ROOMS set TYP='%$request->type%', NUM ='%$request->num_hab%' WHERE ID='%$request->id%'');
    }

    static function save($room){
        $db = Db::getInstance();
        return $db->query('INSERT INTO ROOMS (ID,TYP,NUM) VALUES ($model->id,$model->type,$model->num_hab)');
    }
}