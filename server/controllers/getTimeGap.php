<?php

date_default_timezone_set('Asia/Manila');
function getTimeGap($storedDate) {
    // Convert the stored date to a DateTime object
    $storedDateTime = new DateTime($storedDate);

    // Get the current date and time as a DateTime object
    $currentDateTime = new DateTime();

    // Calculate the interval between the stored date and current date
    $interval = $storedDateTime->diff($currentDateTime);

    $years = $interval->y;
    $months = $interval->m;
    $days = $interval->d;
    $hours = $interval->h;
    $minutes = $interval->i;
    $seconds = $interval->s;

    // Determine the appropriate time gap format
    if ($years > 0) {
        return $years . "y ago";
    } elseif ($months > 0) {
        return $months . "mo ago";
    } elseif ($days > 0) {
        return $days . "d ago";
    } elseif ($hours > 0) {
        return $hours . "h ago";
    } elseif ($minutes > 0) {
        return $minutes . "m ago";
    } elseif ($seconds > 0) {
        return $seconds . "s ago";
    } else {
        return "Just now"; // If the time gap is zero
    }
 
    // $timeGap = "";

    // if ($years > 0) {
    //     $timeGap .= $years . " year(s) ";
    // }
    // if ($months > 0) {
    //     $timeGap .= $months . " month(s) ";
    // }
    // if ($days > 0) {
    //     $timeGap .= $days . " day(s) ";
    // }
    // if ($hours > 0) {
    //     $timeGap .= $hours . " hour(s) ";
    // }
    // if ($minutes > 0) {
    //     $timeGap .= $minutes . " minute(s) ";
    // }
    // if ($seconds > 0) {
    //     $timeGap .= $seconds . " second(s) ";
    // }

    // if (empty($timeGap)) {
    //     return "Just now"; 
    // } else {
    //     return $timeGap . "ago";
    // }
}
?>
