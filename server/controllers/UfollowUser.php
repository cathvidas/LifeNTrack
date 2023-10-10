<?php
include_once("../config/dbUtil.php");
$conn = getConnection();

include_once("userSession.php");
include_once("getUserDetails.php");

$userID = $_SESSION['id'];
$followingUserID = $_GET['user-id'];

// Check if a record already exists
$sql = "SELECT * FROM followers WHERE userID = $userID AND followingUserID = $followingUserID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Record exists, so delete it
    $deleteSql = "DELETE FROM followers WHERE userID = $userID AND followingUserID = $followingUserID";
    
    if ($conn->query($deleteSql) === TRUE) {
        // Redirect to the last visited page
        if (isset($_SESSION['last_page'])) {
            header('Location: ' . $_SESSION['last_page']);
        } else {
            header('Location: ../../client/pages/user/friends.php');
        }
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    // Record does not exist, so insert a new one
    $insertSql = "INSERT INTO followers (userID, followingUserID) VALUES ($userID, $followingUserID)";
    
    if ($conn->query($insertSql) === TRUE) {
        // Redirect to the last visited page
        if (isset($_SESSION['last_page'])) {
            header('Location: ' . $_SESSION['last_page']);
        } else {
            header('Location: ../../client/pages/user/friends.php');
        }
    } else {
        echo "Error inserting record: " . $conn->error;
    }
}

// Store the current page in the session as the last visited page
$_SESSION['last_page'] = $_SERVER['HTTP_REFERER'];

closeConnection($conn);
