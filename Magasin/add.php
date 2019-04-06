<?php 

   $name=$_POST["name"];
   $logo=$_POST["logo"];
   $geo=$_POST["geo"];
   $owner=$_POST["owner"];

   $user="root";
   $password="";
   $host="localhost";
   $db_name="AndroidGestionS";

   $con=mysqli_connect($host,$user,$password,$db_name);

   $image_name = round(microtime(true) * 1000) . ".jpg";

   $req="INSERT INTO Magasin(libelle, logo, emplacement_geo, proprietaire) VALUES ('".$name."', '".$image_name."', '". $geo ."', ".$owner.")";

   if(mysqli_query($con,$req)) {
      // Image Upload
      file_put_contents("../resources/images/$image_name", base64_decode($logo));
      echo 0;
   }
   else {
      echo 1 . $req;
   }
?>