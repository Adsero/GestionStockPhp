<?php
  
	$id=$_POST["id"];
	$nom=$_POST["nom"];
	$prix=$_POST["prix"];
	$description=utf8_decode($_POST["description"]);
	$images=$_POST["images"];

	$user="root";
	$password="";
	$host="localhost";
	$db_name="AndroidGestionS";

	$con=mysqli_connect($host,$user,$password,$db_name);

	$image_name = round(microtime(true) * 1000) . ".jpg";

	$req="UPDATE Produit SET prix=".$prix.", nom = '".$nom."', description = '".$description."', images = '".$image_name."' WHERE id=".$id."";

	if(mysqli_query($con,$req)) {
	  	// Image Upload
	  	file_put_contents("../resources/images/$image_name", base64_decode($images));
	  	echo 0;
	}
	else {
	  	echo 1 . $req;
	}
?>