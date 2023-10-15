<?php
session_start();
include_once("../config/dbUtil.php");
$conn = getConnection();

$invitationID = $_GET['id'];
$inviteStatus = $_GET['status'];

$sql = "UPDATE invitation SET invitationStatus=? WHERE invitationID=?";
$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "si", $inviteStatus, $invitationID);

    if (mysqli_stmt_execute($stmt)) {
        $userID = $_SESSION['id'];
        $getUserSql = "SELECT * FROM user WHERE userID = $userID";
        $userResult = mysqli_query($conn, $getUserSql);
        $userData = mysqli_fetch_assoc($userResult);

        $getInvitation = "SELECT * FROM invitation WHERE invitationID = $invitationID";
        $inviteResult = mysqli_query($conn, $getInvitation);
        $inviteData = mysqli_fetch_assoc($inviteResult);


        $notifMessage = $userData['Fullname'] . " ". $inviteStatus ." your invitation";
        $notifSql = "INSERT INTO notification(notifSenderID, notifReceiverID, notifTitle, notifMessage) VALUES(?, ?, 'Invite', ?)";
        $notifStmt = mysqli_prepare($conn, $notifSql);

        if ($notifStmt) {
            mysqli_stmt_bind_param($notifStmt, "iis", $userID, $inviteData['senderID'], $notifMessage);
            if (mysqli_stmt_execute($notifStmt)) {
            }
        }
        header('Location: ../../client/pages/user/events.php');
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
} else {
    echo "Error preparing statement: " . mysqli_error($conn);
}

closeConnection($conn);
?>
