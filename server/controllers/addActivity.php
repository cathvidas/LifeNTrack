<?php
include_once("../config/dbUtil.php");
$conn = getConnection();

if (!isset($_GET['id'])) {
    // Redirect the user to the login page or display an error message
    header("Location: ../../public");
    exit;
}

$userID = $_GET['id'];

$title = $_POST['title'];
$date = $_POST['date'];
$time = $_POST['time'];
$address = $_POST['address'];
$description = $_POST['description'];
$ootd = $_POST['ootd'];

$sql = "INSERT INTO activity(act_title, act_date, act_time, act_location, act_desc, act_ootd, remarks, userID) VALUES(?, ?, ?, ?, ?, ?, 'Upcoming', ?)";
$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {
    // Bind parameters
    mysqli_stmt_bind_param($stmt, "ssssssi", $title, $date, $time, $address, $description, $ootd, $userID);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        // Get the ID of the inserted activity
        $activityID = mysqli_insert_id($conn);

        if (isset($_POST['invitedFriends']) && is_array($_POST['invitedFriends'])) {
            foreach ($_POST['invitedFriends'] as $invitedUserID) {
                // Insert invitations for invited friends with 'pending' status
                $inviteSql = "INSERT INTO invitation(activityID, senderID, recipientID, invitationStatus) VALUES(?, ?, ?, 'pending')";
                $inviteStmt = mysqli_prepare($conn, $inviteSql);

                if ($inviteStmt) {
                    // Bind parameters
                    mysqli_stmt_bind_param($inviteStmt, "iii", $activityID, $userID, $invitedUserID);

                    // Execute the invitation statement
                    if (mysqli_stmt_execute($inviteStmt)) {

                        $getUserSql = "SELECT * FROM user WHERE userID = $userID";
                        $userResult = mysqli_query($conn, $getUserSql);
                        $userData = mysqli_fetch_assoc($userResult);
                        
                        $notifMessage = $userData['Fullname'] ." invited you to an activity";
                        $invitationID = mysqli_insert_id($conn);
                        $notifSql = "INSERT INTO notification(notifSenderID, notifReceiverID, notifTitle, notifMessage) VALUES(?, ?, 'Invite', ?)";
                        $notifStmt = mysqli_prepare($conn, $notifSql);

                        if ($notifStmt) {
                            mysqli_stmt_bind_param($notifStmt, "iis", $userID, $invitedUserID, $notifMessage);
                            if(mysqli_stmt_execute($notifStmt)){
                                // notification recorder successfully
                            }
                        }
                    } else {
                        echo "Error creating invitations: " . mysqli_error($conn);
                    }

                    // Close the invitation statement
                    mysqli_stmt_close($inviteStmt);
                } else {
                    echo "Error preparing invitation statement: " . mysqli_error($conn);
                }
            }
        }

        // Redirect to the user's page
        header('Location: ../../client/pages/user');
    } else {
        echo "Error creating activity: " . mysqli_error($conn);
    }

    // Close the statement
    mysqli_stmt_close($stmt);
} else {
    echo "Error preparing activity statement: " . mysqli_error($conn);
}

// Close the database connection
closeConnection($conn);
?>
