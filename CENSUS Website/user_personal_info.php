<?php

$con = mysqli_connect('localhost', 'root', '', 'census');

$identity_no = $_POST["identity_no"];
$fullname = $_POST["fullname"];
$f_name = $_POST["f_name"];
$m_name = $_POST["m_name"];
$gender = $_POST["gender"];
$datemin = $_POST["datemin"];
$image = $_POST["image"];

$sql = "INSERT INTO userpersonal (identity_no, fullname, f_name, m_name, gender,datemin, image) VALUES ('$identity_no', '$fullname', '$f_name', '$m_name', '$gender','$datemin', '$image' )";

$rs = mysqli_query($con,$sql);

if($rs)
{
    /*echo "Congratulations! Registration Successfully Now you can login into the CENSUS WEBSITE";*/
    header("location:user_address.html");
    
}
else
{
    echo " Registration Failed !! Try Again !!";
}

?>