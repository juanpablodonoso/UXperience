<?php
include_once '../app/models/Promotion.php';
include_once '../app/Db.php';
include_once '../app/models/Model.php';

class Promotions extends Model {
    function all(){
        $list = array();
        $db = Db::getInstance();
        $result = $db->query('SELECT * FROM promotions');

        while ($Promotion= $result->fetch_assoc()) {
            $us=new Promotion($Promotion['name'],$Promotion['code'],$Promotion['description']);
            $us->set_id($Promotion['id']);
            array_push($list,$us);
        }
        return $list;
    }

    function find($id){
        $db = Db::getInstance();
        $statement = 'SELECT * FROM promotions WHERE id = \''.$id.'\'';
        $result = $db->query($statement);
        $promocion = null;
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $promocion = new Promotion($row['name'], $row['code'], $row['description']);
            $promocion->set_id($row['id']);
        }

        return $promocion;
    }
    function delete($id){
        $db = Db::getInstance();
        $statement = 'DELETE FROM promotions WHERE id =\''.$id.'\'';
        return $db->query($statement);
    }

    function update($Promotion){
        $db = Db::getInstance();
        return $db ->query("UPDATE promotions SET name='{$Promotion->get_name()}' WHERE id={$Promotion->get_id()}") &&
        $db ->query("UPDATE promotions SET description='{$Promotion->get_description()}' WHERE id={$Promotion->get_id()}")&&
        $db ->query("UPDATE promotions SET code='{$Promotion->get_code()}' WHERE id={$Promotion->get_id()}");

    }

    function save($Promotion){
        $db = Db::getInstance();
        return $db->query("INSERT INTO promotions (id, name, description ,code,created_at,updated_at)
    VALUES ('','{$Promotion->get_name()}','{$Promotion->get_description()}','{$Promotion->get_code()}',NULL , NULL)");
    }
}