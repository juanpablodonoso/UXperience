<?php
include_once '../app/models/User.php';
include_once '../app/Db.php';
include_once '../app/models/Model.php';

class Users extends Model {
    function all(){
        $list = [];
        $db = Db::getInstance();
        $statement = 'SELECT * FROM users';
        $result = $db->query($statement);

        foreach($result->fetch_all() as $user){
            $list[] = new User($user['name'],$user['email'],$user['password']);
        }
        return $list;
    }

    function find($id){
        $db = Db::getInstance();
        $statement = 'SELECT * FROM users WHERE id = \''.$id.'\'';
        $result = $db->query($statement);
        $user = null;
        if($result->num_rows() > 0){
            $row = $result->fetch_assoc();
            $user = new User($row['name'], $row['email'], $row['password']);
        }
        return $user;
    }

    function find_by_email($email){
        $db = Db::getInstance();
        $statement = 'SELECT * FROM users WHERE email = \''.$email.'\'';
        $result = $db->query($statement);
        $user = null;
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $user = new User($row['name'], $row['email'], $row['password']);
        }
        return $user;
    }

    function delete($id){
        $db = Db::getInstance();
        $statement = 'DELETE * FROM users WHERE id = \''.$id.'\'';
        $db->query($statement);
    }

    function update(){
        $db = Db::getInstance();
    }

    function save($user){
        $db = Db::getInstance();
        $statement = 'INSERT INTO users (name,email,password) VALUES ('.$user->name.','.$user->email.','.$user->password.')';
        return $db->query($statement);
    }
}