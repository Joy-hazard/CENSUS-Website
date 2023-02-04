<?php

$con = mysqli_connect('localhost', 'root', '', 'census');

$identity_no = $_POST["identity_no"];
$houshold = $_POST["houshold"];
$totalland = $_POST["totalland"];
$electricity = $_POST["electricity"];
$electricitysupply = $_POST["electricitysupply"];
$sourceofwater = $_POST["sourceofwater"];


$sql = "INSERT INTO userhoushold (identity_no, houshold, totalland, electricity, electricitysupply, sourceofwater ) VALUES ('$identity_no', '$houshold', '$totalland', '$electricity', '$electricitysupply', '$sourceofwater' )";

$rs = mysqli_query($con,$sql);

if($rs)
{
    /*echo "Congratulations! Registration Successfully Now you can login into the CENSUS WEBSITE";*/
    header("location:user_feedback.html");
}
else
{
    echo " Registration Failed !! Try Again !!";
}

?>