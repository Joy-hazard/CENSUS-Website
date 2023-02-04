<?php
session_start();
unset($_SESSION["email"]);
unset($_SESSION["name"]);
header("Location: Citizens_login_page.php");
?>