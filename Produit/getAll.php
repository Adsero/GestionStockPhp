<?php
   
	$user="8jgfY7gyWT";
	$password="Nbpd6K16n4";
	$host="remotemysql.com";
	$db_name="8jgfY7gyWT";

	$con=mysqli_connect($host,$user,$password,$db_name);
	$req="SELECT * FROM Produit;";
	
	$result=mysqli_query($con,$req);

	if($result === FALSE) { 
	    die(mysqli_error()); // TODO: better error handling
	}


	$tableau=array();

	while($ligne=mysqli_fetch_assoc($result))
	{
		$tableau[]=$ligne; 
	}

	echo json_encode($tableau);
   
	mysqli_close($con);
?>