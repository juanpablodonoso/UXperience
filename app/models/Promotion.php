<?php

class Promotion
{
    var $id;
    var $description;
    var $promotion_code;
    var $name;
    public function __construct($name,$code,$des)
    {
        $this->name=$name;
        $this->description=$des;
        $this->promotion_code=$code;
    }

    public function get_id()
    {
        return $this->id;
    }

    public function set_id($id)
    {
        $this->id = $id;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_code()
    {
        return $this->promotion_code;
    }

    public function get_description()
    {
        return $this->description;
    }
}