<?php require_once("connection.php");
// mysqli
if(isset($_POST['username']))
{
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = mysqli_query($conn,"SELECT * FROM `user` WHERE `username` = '$username' and `password` = '$password'");
  $check = mysqli_fetch_array($sql);
  if(!is_null($check)){
    $user = new stdClass();
    $user->success = true;
  }else{
    $user = new stdClass();
    $user->success = false;
  }
  echo json_encode($user);
}
else{
	echo "<body>";
}
mysqli_close($conn);
