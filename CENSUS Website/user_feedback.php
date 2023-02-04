<?php

$con = mysqli_connect('localhost', 'root', '', 'census');

$name = $_POST["name"];
$email = $_POST["email"];
$comment = $_POST["comment"];


$sql = "INSERT INTO userfeedback (name, email, comment ) VALUES ('$name','$email','$comment')";

$rs = mysqli_query($con,$sql);

if($rs)
{
    /*echo "Thank You for your Feedback.";*/
    header("location:After_login.php");
    
}
else
{
    echo " Registration Failed !! Try Again !!";
}

?>