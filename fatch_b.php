
<?php
$user = 'root';
$password = '';
$database = 'census';
 
$servername='localhost';
$mysqli = new mysqli($servername, $user, $password, $database);
 
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
 
// SQL query to select data from database
$sql = " SELECT * FROM useraddress WHERE 1; ";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Census </title>
    <link rel="icon" href="CSS/image/llmjpn8a0pgu8szjmnyi.png" type= "image/gif/png">
    
</head>
 
<body>
    <section>
    <center><h1> Do! Which you want !!</h1> </center>
</br>
<?php 
    include_once('connection.php'); 
?>

            <center>
                <button class="btn btn-warning"> <a href="fatch_a.php">User Personal Information</a></button>
                <button class="btn btn-warning"> <a href="fatch_b.php"> User Address Information</a></button>
                <button class="btn btn-warning"> <a href="fatch_c.php">User Houshold</a></button>
                <button class="btn btn-warning"> <a href="fatch_d.php">User Feedback</a></button>
                <button class="btn btn-warning"> <a href="search.php">Search</a></button>
                <button class="btn btn-warning"> <a href="admin_logout.php">Logout</a></button>
            </center>

</br>

        <center><h1>User Address Information </h1></center>
        <table style="width:100%" border ="2">
            <tr>
                <th>  Identity Num.  </th>
                <th> Street Address</th>
                <th>   Postal Code </th>
                <th> City  </th>
                <th>  Country  </th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['identity_no'];?></td>
                <td><?php echo $rows['streetaddress'];?></td>
                <td><?php echo $rows['postalcode'];?></td>
                <td><?php echo $rows['city'];?></td>
                <td><?php echo $rows['country'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </section>
</body>
 
</html>