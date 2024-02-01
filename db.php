<?php 

$username = $_POST['username'];
$password = $_POST['password'];


$conn = new mysqli("localhost", "IPT", "", "student_db");

$sql = "INSERT INTO accounts (username, password) VALUES ('".$username."', '".$password."')";

$conn->query($sql);

header('location: index.php');