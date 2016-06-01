<?php
include_once '../app/models/User.php';
include_once '../app/Db.php';
include_once '../app/models/Model.php';

class Users extends Model {
    function all(){
        $list = array();
        $db = Db::getInstance();
        $result = $db->query('SELECT * FROM users');

      while ($user= $result->fetch_assoc()) {
            $us=new User($user['name'],$user['email'],$user['password']);
            $us->set_id($user['id']);
            array_push($list,$us);
        }
        return $list;
   }

    function find($id){
        $db = Db::getInstance();
        $statement = 'SELECT * FROM users WHERE id = \''.$id.'\'';
        $result = $db->query($statement);
        $user = null;
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $user = new User($row['name'], $row['email'], $row['password']);
            $user->set_id($row['id']);
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
        $statement = 'DELETE FROM users WHERE id =\''.$id.'\'';
        return $db->query($statement);
    }

    function update($user){
        $db = Db::getInstance();
        return $db ->query("UPDATE users SET email='{$user->get_email()}' WHERE id={$user->get_id()}") &&
        $db ->query("UPDATE users SET name='{$user->get_name()}' WHERE id={$user->get_id()}")&&
        $db ->query("UPDATE users SET password='{$user->get_password()}' WHERE id={$user->get_id()}");

    }

    function save($user){
        $db = Db::getInstance();
        return $db->query("INSERT INTO users (id, name, email,password,created_at,updated_at)
                          VALUES ('','{$user->get_name()}','{$user->get_email()}','{$user->get_password()}',NULL , NULL)");
    }
}