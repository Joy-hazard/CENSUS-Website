<?php

$con = mysqli_connect('localhost', 'root', '', 'census');

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$User_pass = $_POST["User_pass"];

$sql = "INSERT INTO registration (First_Name, Last_Name, Email, Mobile_Number, User_pass) VALUES ('$fname','$lname','$email','$mobile', '$User_pass')";

$rs = mysqli_query($con,$sql);

if($rs)
{
    /*echo "Congratulations! Registration Successfully Now you can login into the CENSUS WEBSITE";*/
    header("location:Citizens_login_page.php");
    
}
else
{
    echo " Registration Failed !! Try Again !!";
}

?>