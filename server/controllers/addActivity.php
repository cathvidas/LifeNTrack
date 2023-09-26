<?php
include_once("../config/dbUtil.php");
$conn = getConnection();

$title = $_POST['title'];
$date = $_POST['date'];
$time = $_POST['time'];
$address = $_POST['address'];
$description = $_POST['description'];
$ootd = $_POST['ootd'];
$userID = 1;


$sql = "INSERT INTO activity(act_title, act_date, act_time, act_location, act_desc, act_ootd, remarks, userID) VALUES('" . $title . "', '" . $date . "', '" . $time . "', '" . $address . "', '" . $description . "', '" . $ootd . "', 'progress', 1);";

if ($conn->query($sql) === TRUE) {
    header('Location: ../../client/pages/user');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  closeConnection();
?>