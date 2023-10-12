<?php
include_once('../config/dbUtil.php');
$conn = getConnection();

$actID = $_GET['event'];
// echo $actID;
// sql to delete a record
$sql = "DELETE FROM activity WHERE activityID=$actID";

if (mysqli_query($conn, $sql)) {
    header('Location: ../../client/pages/user/events.php');
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

closeConnection($conn);
?>