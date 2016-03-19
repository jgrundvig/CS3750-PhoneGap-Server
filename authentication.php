<?php require_once("connection.php");
// mysqli
if(isset($_POST['username']))
{
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = mysqli_query($conn,"SELECT * FROM `user` WHERE `username` = '$username' and `password` = '$password'");
  $check = mysqli_fetch_array($sql);
  if(!is_null($check)){
    $user = "{
      success: true,
      UserID: " . $check["UserID"] . "
    }";
  }else{
    $user = "{
      success: false,
      UserID:" . $check["UserID"] . "
    }";
  }
  echo $user;
}
else{
	echo "<body>";
}
