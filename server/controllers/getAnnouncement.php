<?php
include_once("../../../server/config/dbUtil.php");
$conn = getConnection();
$sql = "SELECT * FROM announcement where id = 1";
$result = mysqli_query($conn, $sql);
$announcement = mysqli_fetch_assoc($result);

include_once("getTimeGap.php");

$storedDate = $announcement['timeCreated']; 
$timeGap = getTimeGap($storedDate);
// echo "Time gap: " . $timeGap;


date_default_timezone_set('Asia/Manila');

$date = $announcement['timeCreated'];
$current = new DateTime();
?>