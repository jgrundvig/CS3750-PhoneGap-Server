<?php
header('Access-Control-Allow-Origin: *');
require_once("./connection.php");
if(isset($_POST['taskId']))
{
	$taskId = $_POST['taskId'];
	$completed = $_POST['completed'];

	$query = "UPDATE `task` SET `Completed`=$completed WHERE `taskId` = $taskId";
	$taskQuery = mysqli_query($conn, $query);
	if($taskQuery){
		$task = new stdClass();
    $task->success = true;
		//die(mysqli_error($conn));
	}
	else {
		$task = new stdClass();
    $task->success = false;
	}
	echo json_encode($task);
}
else{
	echo "taskID is null";
}
mysqli_close($conn);
?>
