<?php
require_once("connection.php");

if(isset($_POST['username']))
{
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "INSERT INTO user(username,password)
		VALUES (
			'{$username}', '{$password}'
    )";
  $check = mysqli_query($conn, $sql);
  if($check){
  $user = new stdClass();
  $user->success = true;
  }else{
    $user = new stdClass();
    $user->success = false;
    //$user->message = die(mysqli_error($conn));
    //die(mysqli_error($conn));
  }
  echo json_encode($user);
}
else{
	echo "<body>";
}
mysqli_close($conn);
?>
