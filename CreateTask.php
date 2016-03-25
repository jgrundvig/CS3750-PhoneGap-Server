<?php
require_once("connection.php");
require_once("./task.php");
if(isset($_POST['userId']))
{
  $description = $_POST['description'];
  $completed = false;
  $userId = $_POST['userId'];

  $sql = "INSERT INTO task(Description,UserID,Completed)
		VALUES (
			'{$description}', '{$userId}', '{$completed}'
    )";
  $check = mysqli_query($conn, $sql);
  if($check){
    $task = new task();
    $task->taskId = mysqli_insert_id($conn);
    $task->description = $description;
    $task->userId = $userId;
    $task->success = true;
  }else{
    $task = new stdClass();
    $task->success = false;
    //$task->message = die(mysqli_error($conn));
    // die(mysqli_error($conn));
  }
  echo json_encode($task);
}
else{
	echo "<body>";
}
mysqli_close($conn);
?>
