<?php
header('Access-Control-Allow-Origin: *');
require_once("./connection.php");
if(isset($_POST['taskId']))
{
	$taskId = $_POST['taskId'];

	$query = "DELETE FROM `task` WHERE `taskId` = $taskId";
	$taskQuery = mysqli_query($conn, $query);

	if(!$taskQuery){
		$task = new stdClass();
    $task->success = false;
		die(mysqli_error($conn));
	}
	else {
		$task = new stdClass();
    $task->success = true;
	}
	echo json_encode($task);
}
else{
	echo "taskID is null";
}
mysqli_close($conn);
?>
