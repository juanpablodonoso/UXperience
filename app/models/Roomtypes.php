<?php
include_once '../app/models/Roomtype.php';
include_once '../app/models/Model.php';
include_once '../app/Db.php';

class Roomtypes extends Model {
    function all(){
        $list = array();
        $statement = 'SELECT * FROM roomtypes';
        $result = Db::getInstance()->query($statement);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $roomtype = new Roomtype(null,null,null,null);
                $this->silentSave($roomtype, $row);
                array_push($list,$roomtype);
            }
        }

        return $list;
    }

    function find($id){
        $db = Db::getInstance();
        $statement = 'SELECT * FROM roomtypes WHERE id = \''.$id.'\'';
        $result = $db->query($statement);
        $roomtype = null;
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $roomtype = new Roomtype();
            $this->silentSave($roomtype, $row);
        }
        return $roomtype;
    }

    function findByName($name){
        $db = Db::getInstance();
        $statement = 'SELECT * FROM roomtypes WHERE name = \''.$name.'\'';
        $result = $db->query($statement);
        $roomtype = null;
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $roomtype = new Roomtype();
            $this->silentSave($roomtype, $row);
        }
        return $roomtype;
    }

    function delete($id){
        $statement = 'DELETE * FROM roomtype WHERE id = \''.$id.'\'';
        return Db::getInstance()->query($statement);
    }

    function update($roomtype){

    }

    function save($roomtype){
        $db = Db::getInstance();
        return $db->query("INSERT INTO roomtypes (id, name, description, price, created_at, updated_at)
    VALUES ('','{$roomtype->getName()}','{$roomtype->getDescription()}','{$roomtype->getPrice()}',NULL , NULL)");
    }

    private function silentSave($reserve,$row){
        $reserve->setId($row['id']);
        $reserve->setName($row['name']);
        $reserve->setDescription($row['description']);
        $reserve->setPrice($row['price']);
    }
}