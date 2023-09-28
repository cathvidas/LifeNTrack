<?php
include_once('../config/dbUtil.php');

function getUserDetails($userID) {
    $conn = getConnection();
    $sql = "SELECT * FROM user WHERE userID = '$userID'";
    $result = mysqli_query($conn, $sql);
    $userData = mysqli_fetch_assoc($result);
}

?>