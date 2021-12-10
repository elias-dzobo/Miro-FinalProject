<?php 
require_once (dirname(__FILE__)).'/../classes/task_class.php';


function createTask($content, $id){
    // Create new post object
    $task = new Task;

    // Run query
    $runQuery = $task->add($content, $id);

    if($runQuery){
        return $runQuery;
    }else{
        return false;
    }
}

function deleteTask($id) {
    $task = new Task;

    //Run query
    $runQuery = $task->delete($id);

    if($runQuery){
        return $runQuery;
    }else{
        return false;
    }

}

function getTasks($id) {
    $task = new Task;

    $runQuery = $task->getTasks($id);

    if ($runQuery) {
        $tasks = array();
        while($record = $task->db_fetch()){
            $tasks[] = $record;
        }
        return $tasks;
    } else {
        return false;
    }
}



?>