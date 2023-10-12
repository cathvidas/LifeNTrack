<?php
if (!isset($_SESSION['id'])) {
    // Redirect the user to the login page or display an error message
    header("Location: ../../public");
    exit;
}

$userID = $_SESSION['id'];
include_once("../../../server/config/dbUtil.php");

$conn = getConnection();

$sql = "SELECT * FROM user WHERE userID = '$userID'";
$result = mysqli_query($conn, $sql);
$userData = mysqli_fetch_assoc($result);

?>