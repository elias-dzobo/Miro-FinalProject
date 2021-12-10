<?php
//connect to database class
require_once (dirname(__FILE__)).'/../settings/db_class.php';

class Task extends db_connection {
    public function add($content, $id) {

        $sql = "INSERT INTO `task`(`content`, `u_id`) VALUES ('$content', '$id')";

        return $this->db_query($sql);
    }

    public function delete($id) {
        $sql = "DELETE FROM `task` WHERE `t_id`='$id'";

        // run query
        return $this->db_query($sql);
    }

    public function getTasks($id) {
        $sql = "SELECT * FROM `task` WHERE `u_id` = '$id'";

        return $this->db_query($sql);
    }

    
}
?>