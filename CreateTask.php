<?php require_once("connection.php");

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
  $task = "{
    success: true
}";
  }else{
    die(mysqli_error($conn));
  }
  echo $task;
}
else{
	echo "<body>";
}
mysqli_close($conn);
?>