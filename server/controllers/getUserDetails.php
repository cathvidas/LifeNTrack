<?php
if (!isset($_SESSION['id'])) {
    // Redirect the user to the login page or display an error message
    header("Location: ../../public");
    exit;
}

$userID = $_SESSION['id'];
include_once("../../../server/config/dbUtil.php");

$conn = getConnection();

$userSql = "SELECT * FROM user WHERE userID = '$userID'";
$userDetResult = mysqli_query($conn, $userSql);
$userData = mysqli_fetch_assoc($userDetResult);

?>