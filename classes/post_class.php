<?php
//connect to database class
require_once (dirname(__FILE__)).'/../settings/db_class.php';

class Post extends db_connection {
    public function create($title, $body, $id){
        // sql query
        $sql = "INSERT INTO `Post`(`title`, `content`, `u_id`) VALUES ('$title','$body', '$id')";

        // run query
        return $this->db_query($sql);
    }

    public function getPosts($id){
        //sql query
        $sql = "SELECT * FROM `Post` WHERE `u_id` = '$id'";

        //run query
        return $this->db_query($sql);
    }

    public function getSinglePost($id){
        // sql query
        $sql = "SELECT * FROM `Post` WHERE `p_id`='$id'";

        // run query
        return $this->db_query($sql);
    }

    public function update($id, $title, $body){
        // sql query
        $sql = "UPDATE `Post` SET `title`='$title',`content`='$body' WHERE `p_id`='$id'";

        // run query
        return $this->db_query($sql);
    }

    public function delete($id){
        // sql query
        $sql = "DELETE FROM `Post` WHERE `p_id`='$id'";

        // run query
        return $this->db_query($sql);
    }
}

?>