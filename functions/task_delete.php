<?php
include_once (dirname(__FILE__)).'/../controllers/task_controller.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $deletePost = deleteTask($id);

    if($deletePost){
        header("location: ../todo.php");
    }else{
        echo "something went wrong";
    }
}

?>