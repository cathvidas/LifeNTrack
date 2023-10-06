<?php
session_start();
if ($_SESSION["Role"] == null) {
    header("Location: ../../public");
} else {
    if ($_SESSION["Role"] == "User") {
        include_once("getUserDetails.php");
        if ($userData['Status'] == 'Inactive' || $userData['Status'] == 'Deactivated') {
            header("Location: ../../public");
        }
    } else {
        header("Location: ../../public");
    }
}
