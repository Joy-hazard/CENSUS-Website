
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Census </title>
    <link rel="icon" href="CSS/image/llmjpn8a0pgu8szjmnyi.png" type= "image/gif/png">
    <!--<link rel="stylesheet" href="CSS/adminloginpage.css">-->
</head>
  <body>
        <center><h1> Do! Which you want !!</h1> </center>
</br></br>
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

            <form action="#" method="post">
                <center>
                        <label for="entervalue">Enter Value :</label><br>
			        <input type="text" name="id"/> </br>
			        <input type="submit" name="search" value="Search" />
                <center>
	        </form>
	
	   
<?php 
	if(isset($_POST['search'])){
		   
				$id= $_POST['id']; 
				$sql= "SELECT * FROM userpersonal WHERE fullname=$fullname";
				$run =mysqli_query($mysqli,$sql);
				
	echo '<table style="width:50%" border="2" > 

      <tr> 
        <th>  Identity Num.  </th>
        <th>  Full Name  </th>
        <th>  Father name  </th>
        <th>  Mother Name  </th>
        <th>  Gender  </th>
        <th>  DOB  </th>
        <th>  Image  </th> 
      </tr>';
				
				  
	
       while ($row = mysqli_fetch_array($run)) {
	
                        $identity_no = $row["identity_no"];
                        $fullname = $row["fullname"];
                        $f_name = $row["f_name"];
                        $m_name = $row["m_name"];
                        $gender = $row["gender"];
                        $datemin = $row["datemin"];
                        $image = $row["image"];
	
                  echo '<tr> 
                  <td>'.$identity_no.'</td>
                  <td>'.$fullname.'</td> 
                  <td>'.$f_name.'</td>
                  <td>'.$m_name.'</td>
                  <td>'.$gender.'</td>
                  <td>'.$datemin.'</td>
                  <td>'.$image.'</td>
				  </tr>';	
				 }				      
	}
	


?>



<?php

    echo '<h1>Display Data</h1>';

$sql = "SELECT * FROM userpersonal "; 
echo '<table style="width:100%" border="2" > 

      <tr> 
            <th>  Identity Num.  </th>
            <th>  Full Name  </th>
            <th>  Father name  </th>
            <th>  Mother Name  </th>
            <th>  Gender  </th>
            <th>  DOB  </th>
            <th>  Image  </th> 
			  
		    <th><font color="green">Edit</font></th>
            <th><font color="Red">Delete</font></th>
      </tr>';

if ($result = $mysqli->query($sql)) {
    while ($row = $result->fetch_assoc()) {

                        $identity_no = $row["identity_no"];
                        $fullname = $row["fullname"];
                        $f_name = $row["f_name"];
                        $m_name = $row["m_name"];
                        $gender = $row["gender"];
                        $datemin = $row["datemin"];
                        $image = $row["image"];
	

        echo '<tr> 
                  <td>'.$identity_no.'</td>
                  <td>'.$fullname.'</td> 
                  <td>'.$f_name.'</td>
                  <td>'.$m_name.'</td>
                  <td>'.$gender.'</td>
                  <td>'.$datemin.'</td>
                  <td>'.$image.'</td>		
				   
				  <td>  
		             <button class="btn btn-warning"> <a href=#?updateid='.$identity_no.'">Edit</a></button>	                
				  </td> 
				  
				   <td>  
		             <button class="btn btn-danger"> <a href="Single_delete.php?deleteid='.$identity_no.'">Delete</a></button>	                 
				  </td> 
				  
				   
			
		          
              </tr>';
    }
    $result->free();
} 
$mysqli ->close();

?>





</body> 
</html>