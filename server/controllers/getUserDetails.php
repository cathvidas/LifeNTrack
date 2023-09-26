<?php
include_once("../../../server/config/dbUtil.php");

$conn = getConnection();

if(isset($_GET['id'])) {
    $userID = $_GET['id'];

    $sql = "SELECT * FROM user WHERE userID = '$userID'";
    $result = mysqli_query($conn, $sql);
    $userData = mysqli_fetch_assoc($result);

}




?>