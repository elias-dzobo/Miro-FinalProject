<?php 

session_start();
require_once (dirname(__FILE__)).'/../controllers/task_controller.php';



if (isset($_POST['submit'])) {

    $id = $_SESSION['id'];
    $task = $_POST['title'];


    $newTask = createTask($task, $id);

    if ($newTask) {
        echo "success";
        header("location: ../todo.php");
    } else {
        echo "failed";
    }

} else {
    echo "didnt work";
}

?>
