<?php require_once("connection.php")

$result = $mysqli->query("SELECT * from task where UserID = 4 ");
$row = $result->fetch_assoc();
echo htmlentities($row['Description']);

?>
