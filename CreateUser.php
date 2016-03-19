<?php require_once("connection.php");

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
  $user = "{
    success: true
}";
  }else{
    die(mysqli_error($conn));
  }
  echo $user;
}
else{
	echo "<body>";
}
mysqli_close($conn);
?>
