<?php
include_once (dirname(__FILE__)).'/../controllers/post_controller.php';

if(isset($_GET['id'])){
    $deletePost = deletePost($_GET['id']);
    
    if($deletePost){
        header("location: ../main.php");
    }else{
        echo "something went wrong";
    }
}

?>