<?php

$servername = "localhost";
$username = "root";
$password = "";
$database_name = "software_dev";
$conn = mysqli_connect($servername, $username, $password, $database_name);
$phone_id = $_GET['id'];

$sql = "DELETE FROM phone WHERE id='{$phone_id}'";

mysqli_query($conn, $sql);

header("Location: all.php");


?>