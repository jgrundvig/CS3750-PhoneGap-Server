<?php
header('Access-Control-Allow-Origin: *');
require_once("./connection.php");
require_once("./task.php");
$userId = htmlspecialchars($_GET["userId"]);
if(isset($userId))
{
$query = "SELECT * FROM `task` WHERE `UserID` = " . $userId;
$result = mysqli_query($conn, $query);
  if(!$result){
  	die("Database query failed: ". mysqli_error($conn));
  }
  else{
    $taskList = array();
    while($row = $result->fetch_assoc()) {
      $task = new task();
      $task->taskId = $row["TaskID"];
      $task->description = $row["Description"];
      $task->completed = $row["Completed"];
      $task->userId = $row["UserID"];

      $taskList[] = $task;

    }
    echo json_encode($taskList);
  }
}
else{
	echo "User Id is null";
}
mysqli_close($conn);
?>
