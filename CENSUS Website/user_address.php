<?php

$con = mysqli_connect('localhost', 'root', '', 'census');

$identity_no = $_POST["identity_no"];
$streetaddress = $_POST["streetaddress"];
$postalcode = $_POST["postalcode"];
$city = $_POST["city"];
$country = $_POST["country"];


$sql = "INSERT INTO useraddress (identity_no, streetaddress, postalcode, city, country) VALUES ('$identity_no', '$streetaddress', '$postalcode', '$city', '$country' )";

$rs = mysqli_query($con,$sql);

if($rs)
{
    /*echo "Congratulations! Registration Successfully Now you can login into the CENSUS WEBSITE";*/
    header("location:user_houshold.html");
}
else
{
    echo " Registration Failed !! Try Again !!";
}

?>