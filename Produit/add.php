<?php 

   $annonceur_id=$_POST["annonceur_id"];
   $nom=$_POST["nom"];
   $prix=$_POST["prix"];
   $description=utf8_decode($_POST["description"]);
   $images=$_POST["images"];
   $date=date("Y-m-d H:i:s");

   $user="8jgfY7gyWT";
   $password="Nbpd6K16n4";
   $host="remotemysql.com";
   $db_name="8jgfY7gyWT";

   $con=mysqli_connect($host,$user,$password,$db_name);

   $image_name = round(microtime(true) * 1000) . ".jpg";

   // Get the id of the store
	$req="SELECT id_magasin FROM magasin WHERE proprietaire = $annonceur_id;";

	$result=mysqli_query($con,$req);
	$tableau=array();

	while($ligne=mysqli_fetch_assoc($result))
	{
		$tableau[]=$ligne; 
	}

	$store_id = $tableau[0]["id_magasin"];


   $req="INSERT INTO produit(nom, prix, description, images, magasin, annonceur_id, date_modif) VALUES ('".$nom."', ".$prix.", '".$description."', '". $image_name ."', ".$store_id.", ".$annonceur_id.", '".$date."')";

   if(mysqli_query($con,$req)) {
      // Image Upload
      file_put_contents("../resources/images/$image_name", base64_decode($images));
      echo 0;
   }
   else {
      echo 1 . $req;
   }
?>