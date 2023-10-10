<?php
include_once("../config/dbUtil.php");
$conn = getConnection();

include_once("userSession.php");
include_once("getUserDetails.php");


// $userID = $_SESSION['id'];
$followingUserID = $_GET['user-id'];
// $condition = $_POST['content'];

$sql = "INSERT INTO followers(userID, followingUserID) VALUES($userID, $followingUserID)";

if ($conn->query($sql) === TRUE) {
    header('Location: ../../client/pages/user/friends.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  closeConnection($conn);
