<?php

class Promotions extends Model{
    static function all(){
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM PROMOTIONS');

        foreach($req->fetchAll() as $r){
            $list[] = new Promotion($r['id'],$r['number'],$r['description'],$r['cod_promotions'],$r['F_inicio'],$r['F_fin']);
        }
        return $list;
    }

    static function find($id){
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM PROMOTIONS WHRERE ID='%$id%'');
        return $req;
    }

    static function delete($id){
        $db = Db::getInstance();
        return $db->query('DELETE FROM PROMOTIONS WHRERE ID=\'%$id%\'');
    }

    static function update(){

    }

    static function save($promotion){

    }
}