<?php
include_once '../app/models/User.php';
include_once '../app/models/Users.php';

class LoginController {

    function get_login($email, $password){
        $users = new Users();
        $user = $users->find_by_email($email);
        if($email == $user->get_email() && $password == $user->get_password()){
            $_SESSION['loggedin'] = true;
            $_SESSION['name'] = $user->get_name();
            $_SESSION['start'] = time();
            $_SESSION['expire'] = $_SESSION['start']+(5*60);
            return true;
        }
        return false;
    }
    
}