<?php require_once("./connection.php");

$checkQuery = mysqli_query($conn, "SELECT * from `task` where `UserID` = 4 ");
$row = $checkQuery->fetch_assoc();
echo htmlentities($row['Description']);

?>
