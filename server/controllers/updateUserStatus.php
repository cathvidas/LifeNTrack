<?php
session_start();
include_once("../config/dbUtil.php");

function updateStatus($newStatus)
{
    if (!isset($_SESSION['id'])) {
        header("Location: ../../client/public");
        exit;
    }

    $conn = getConnection();
    $userID = $_SESSION['id'];

    $sql = "SELECT * FROM user WHERE userID = $userID";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if ($newStatus == 'Active') {
        $row['Status'] = 'Active';
    } 
    if ($newStatus == 'Inactive') {
        $row['Status'] = 'Inactive';
    }
    if ($newStatus == 'Deactivated') {
        $row['Status'] = 'Deactivated';
    }

    $updateSql = "UPDATE user SET Status = '{$row['Status']}' WHERE userID = $userID";
    $conn->query($updateSql);

    closeConnection($conn);
}
