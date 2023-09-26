<?php
session_start();
include_once("../config/dbUtil.php");

$email = $_POST["email"];
$password = $_POST["password"];


$conn = getConnection();
$sql = "SELECT * from user where Email = '".$email."' and Password = '".$password."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
// echo $row;
if($row["Email"] == $email && $row["Password"]== $password)
{
    if($row["Role"]=="Admin")
    {        
        header("Location: ../../client/pages/admin");
    }
    else
    {        
        header("Location: ../../client/pages/user");
    }
    $_SESSION["Role"] = $row["Role"];
    
}
else
{
    header("Location: ../../client/public");
}
closeConnection();


?>