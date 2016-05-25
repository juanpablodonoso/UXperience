<?php

class Room
{
    var $id;
    var $type;
    var $room_number;

    function __construct($id, $type, $room_number){
        $this->id = $id;
        $this->type = $type;
        $this->room_number = $room_number;

    }

    public function get_id(){
        return $this->id;
    }

    public function set_id($id){
        $this->id = $id;
    }

    public function get_type(){
        return $this->type;
    }

    public function set_type($type){
        $this->type = $type;
    }

}