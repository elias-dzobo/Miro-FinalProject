<?php
//connect to database class
require_once (dirname(__FILE__)).'/../classes/user_class.php';

function register_new_user($username, $email, $password){
    // create a new instance of user object
    $user = new User;

    // run the query
    $run_query = $user->register($username, $email, $password);

    // if successful
    if($run_query){
        return true;
    }else{
        return false;
    }
}

function verify_email_fxn($email){
    // create a new instance of user object
    $user = new User;

    // run the query
    $run_query = $user->verify_email($email);

    // if successful
    if($run_query){
        // fetch data from database
        $user_email = $user->db_fetch();
        if(empty($user_email)){
            // if empty means the email isn't in the database already
            return true;
        }else{
            return false;
        }
    }else{
        return false;
    }
}

function verify_password($email) {

    $user = new User;

    $run_query = $user->verify_password($email);
    if ($run_query) {

        $user_password = $user->db_fetch();
        return $user_password['pass'];
    } else {
        return "";
    }
}

function update_password($email, $password) {

    $user = new User;

    $run_query = $user->update_password($email, $password);
        if ($run_query) {
            return true;
        } else {
            return false;
        }
    
}

function GetId($email) {
    
    $user = new User;

    $run_query = $user->GetId($email);

    if ($run_query) {
        $u_id = $user->db_fetch();
        return $u_id['u_id'];
    } else {
        return "";
    }
}

function getUsername($email) {
    $user = new User;

    $run_query = $user->getUsername($email);
    if ($run_query) {
        $username = $user->db_fetch();
        return $username['username'];
    } else {
        return "";
    }
}


