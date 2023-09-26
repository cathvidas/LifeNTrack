<?php
$sql = "SELECT * from user";
$result = mysqli_query($conn, $sql);
                                 
$male = 0;
$female = 0;
$others = 0;

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

?>
