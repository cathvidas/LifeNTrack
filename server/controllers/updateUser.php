<?php
session_start();
include_once("../config/dbUtil.php");
$conn = getConnection();

$userID = $_SESSION['id'];
$userName = isset($_POST['fullname']) ? $_POST['fullname'] : null;
$userGender = isset($_POST['gender']) ? $_POST['gender'] : null;
$userEmail = isset($_POST['email']) ? $_POST['email'] : null;
$userBio = isset($_POST['bio']) ? $_POST['bio'] : null;
$currentPass = isset($_POST['password']) ? $_POST['password'] : null;
$newPass = isset($_POST['newpassword']) ? $_POST['newpassword'] : null;
$confirmPass = isset($_POST['renewpassword']) ? $_POST['renewpassword'] : null;


if ($userID && $userName && $userGender && $userEmail) {
    $sql = "UPDATE user SET Fullname=?, Gender=?, Email=?, Bio=? WHERE userID=?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssssi", $userName, $userGender, $userEmail, $userBio, $userID);

        if (mysqli_stmt_execute($stmt)) {
            header('Location: ../../client/pages/user/settings.php');
            exit;
        } else {
            echo "Error updating user details: " . mysqli_error($conn);
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing user details statement: " . mysqli_error($conn);
    }
}

// Use a prepared statement to update the user password
if ($userID && $currentPass && $newPass && $confirmPass) {
    $getUserSql = "SELECT * FROM user WHERE userID = $userID";
    $userResult = mysqli_query($conn, $getUserSql);
    $userData = mysqli_fetch_assoc($userResult);

    if ($userData) {
        if ($currentPass == $userData['Password']) {
            if ($newPass == $confirmPass) {

                $updatesql = "UPDATE user SET Password=? WHERE userID=?";
                $stmt = mysqli_prepare($conn, $updatesql);

                if ($stmt) {
                    mysqli_stmt_bind_param($stmt, "si", $newPass, $userID);

                    if (mysqli_stmt_execute($stmt)) {
                        header('Location: ../../client/pages/user/settings.php');
                        exit; 
                    } else {
                        echo "Error updating user password: " . mysqli_error($conn);
                    }
                    mysqli_stmt_close($stmt);
                } else {
                    echo "Error preparing user password statement: " . mysqli_error($conn);
                }
            } else {
                echo "New password and confirmation password do not match.";
            }
        } else {
            echo "Current password is incorrect.";
        }
    }
}

// Close the database connection
closeConnection($conn);
