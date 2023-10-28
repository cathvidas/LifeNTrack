<?php
// include_once('../config/dbUtil.php');

function countActivityPerMonth($specifiedMonth)
{
    $conn = getConnection();
    $sql = "SELECT * FROM activity";
    $result = mysqli_query($conn, $sql);

    $activityCount = 0; // Initialize activity count for the specified month

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $datetimeString = $row['act_date'];
            $dateTime = new DateTime($datetimeString);

            // Convert DateTime object to Unix timestamp
            $timestamp = $dateTime->getTimestamp();

            $month = date('n', $timestamp); // Use the Unix timestamp

            // Check if the activity occurred in the specified month
            if ($month == $specifiedMonth) {
                $activityCount++;
            }
        }

        return $activityCount;
    } else {
        return 0; // No results found
    }
}

// // Usage example: Count activities in January (specified month = 1)
// $specifiedMonth = 10;
// echo countActivityPerMonth(10);
// echo "Number of activities in specified month: " . $activityCount;
// 
?>
