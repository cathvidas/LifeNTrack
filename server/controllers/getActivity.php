<?php
include_once("../config/dbUtil.php");

$conn = getConnection();

$sql = "SELECT * FROM activity";

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        if($row['Gender'] == 'male' || $row['Gender'] == 'Male') {
            $male++;
        } 
        else if ($row['Gender'] == 'Female' || $row['Gender'] == 'female') {
            $female++;
        }
        else {
            $others++;
        }
    }
} else {
echo "0 results";
}



closeConnection();

?>