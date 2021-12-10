<?php
//connect to database class
require_once (dirname(__FILE__)).'/../settings/db_class.php';

class User extends db_connection{
    // register user
    public function register($username, $email, $password){
        $sql = "INSERT INTO `user`(`username`, `email`, `pass`) VALUES ('$username', '$email', '$password')";

        return $this->db_query($sql);
    }

    // verify user email
    public function verify_email($email){
        $sql = "SELECT * FROM `user` WHERE `email`='$email'";
        return $this->db_query($sql);
    }

    public function verify_password($email) {
        $sql = "SELECT `pass` FROM `user` WHERE `email` = '$email'";
        return $this->db_query($sql);
    }

    public function update_password($email, $password) {
        $sql = "UPDATE `user` SET `pass`='$password' WHERE `email` = '$email'";

        return $this->db_query($sql);
    }

    public function GetId($email){

        $sql = "SELECT `u_id` FROM `user` WHERE `email` = '$email'";
        return $this->db_query($sql);
    }

    public function getUsername($email) {
        $sql = "SELECT `username` FROM `user` WHERE `email` = '$email'";
        return $this->db_query($sql);
    }


}