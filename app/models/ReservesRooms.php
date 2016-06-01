<?php
include_once '../app/models/ReserveRooms.php';
include_once '../app/models/Model.php';
include_once '../app/Db.php';

class ReservesRooms extends Model {
    function all(){
        $list = array();
        $statement = 'SELECT * FROM reserves_rooms';
        $result = Db::getInstance()->query($statement);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $reserverooms = new ReserveRooms();
                $this->silentSave($reserverooms, $row);
                array_push($list,$reserverooms);
            }
        }

        return $list;
    }

    function find($id){
        $db = Db::getInstance();
        $statement = 'SELECT * FROM reserves_rooms WHERE id = \''.$id.'\'';
        $result = $db->query($statement);
        $reserverooms = null;
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $reserverooms = new ReserveRooms();
            $this->silentSave($reserverooms, $row);
        }
        return $reserverooms;
    }

    function findByReserveId($reserve_id){
        $db = Db::getInstance();
        $statement = 'SELECT * FROM reserves_rooms WHERE reserve_id = \''.$reserve_id.'\'';
        $result = $db->query($statement);
        $reserverooms = null;
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $reserverooms = new ReserveRooms();
            $this->silentSave($reserverooms, $row);
        }
        return $reserverooms;
    }

    function delete($id){
        $statement = 'DELETE FROM reserves_rooms WHERE id = \''.$id.'\'';
        return Db::getInstance()->query($statement);
    }

    function update($reserverooms){
        $db = Db::getInstance();
        return $db ->query("UPDATE reserves_rooms SET reserve_id='{$reserverooms->getReserveId()}', roomtype_id='{$reserverooms->getRoomtypeId()}', rooms_number={$reserverooms->getRoomsNumber()} WHERE id={$reserverooms->getId()}");
    }

    function save($reserverooms){
        $db = Db::getInstance();
        return $db->query("INSERT INTO reserves_rooms (id, reserve_id, roomtype_id, rooms_number, created_at, updated_at)
    VALUES ('','{$reserverooms->getReserveId()}','{$reserverooms->getRoomtypeId()}','{$reserverooms->getRoomsNumber()}',NULL , NULL)");
    }

    private function silentSave($reserve,$row){
        $reserve->setId($row['id']);
        $reserve->getReserveId($row['reserve_id']);
        $reserve->getRoomtypeId($row['roomtype_id']);
        $reserve->getRoomsNumber($row['rooms_number']);
    }
}