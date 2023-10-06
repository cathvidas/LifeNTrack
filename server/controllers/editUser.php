<?php
include_once('../config/dbUtil.php');

$conn = getConnection();
$userID = $_GET['userID'];
$selectedStatus = isset($_POST['status']) ? $_POST['status'] : null;

if ($selectedStatus !== null) {
  $sql = "UPDATE user SET Status = '{$selectedStatus}' WHERE userID = $userID";
  if (mysqli_query($conn, $sql)) {
    header('Location: ../../client/pages/admin/usersList.php');
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
} else {
  header('Location: ../../client/pages/admin/usersList.php');
}


closeConnection($conn);
