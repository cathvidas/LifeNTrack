<?php
include_once("../config/dbUtil.php");
$conn = getConnection();

include_once("userSession.php");
include_once("getUserDetails.php");

$followingUserID = $_GET['user-id'];

$sql = "DELETE FROM followers WHERE userID = $userID AND followingUserID = $followingUserID";

if ($conn->query($sql) === TRUE) {
    header('Location: ../../client/pages/user/friends.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

closeConnection($conn);
