<?php

class User {
    var $id;
    var $name;
    var $email;
    var $password;

    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function get_id() {
        return $this->id;
    }
    public function set_id($id){
        $this->id=$id;
    }
    public function get_name() {
        return $this->name;
    }

    public function set_name($name){
        $this->name = $name;
    }

    public function get_email() {
        return $this->email;
    }

    public function set_email($email){
        $this->email = $email;
    }

    public function get_password() {
        return $this->password;
    }

    public function set_password($password){
        $this->password = $password;
    }
}