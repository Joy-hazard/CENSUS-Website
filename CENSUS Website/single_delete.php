
<!DOCTYPE html> 
<html> 
<head>
</head>

<body> 

<?php 
include_once('connection.php'); 
?>

<?php 
if(isset($_GET['deleteid']))
{
		$identity_no= $_GET['deleteid']; 
		
	$sql = "DELETE FROM userpersonal WHERE identity_no='$identity_no'";
	$run =mysqli_query($mysqli,$sql) or die(mysqli_query());
	if($run){
		echo "<h1>Data Deleted</h1>";
		header("location:search.php");
	}
		else{
			echo "<h1> Data not Deleted  </h1>";	
	}
	
	
}
$mysqli ->close();

?>

</body> 
</html>