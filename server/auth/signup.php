<?php
session_start();
include_once("../config/dbUtil.php");

$conn = getConnection();

$fullname = $_POST["fullname"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$password = $_POST["password"];
$role = "User";
$status = "Active";


$sql = "INSERT INTO user(Fullname, Gender, Email, Password, Role, Status) VALUES('" . $fullname . "', '" . $gender . "', '" . $email . "', '" . $password . "', '" . $role . "', '" . $status . "');";

if ($conn->query($sql) === TRUE) {
    header('Location: ../../client/pages/user');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


closeConnection();


?>