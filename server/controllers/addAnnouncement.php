<?php
include_once("../config/dbUtil.php");
$conn = getConnection();

$adminId = $_GET['admin'];
$subject = $_POST['subject'];
$content = $_POST['content'];

$sql = "INSERT INTO announcement(subject, content, adminId) VALUES('" . $subject . "', '" . $content . "', " . $adminId . ");";

if ($conn->query($sql) === TRUE) {
    header('Location: ../../client/pages/admin/announcements.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  closeConnection($conn);
?>