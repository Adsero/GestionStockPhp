<?php 

   $id=$_POST["id"];
   $name=$_POST["name"];
   $logo=$_POST["logo"];
   $geo=$_POST["geo"];

   $user="8jgfY7gyWT";
   $password="Nbpd6K16n4";
   $host="remotemysql.com";
   $db_name="8jgfY7gyWT";

   $con=mysqli_connect($host,$user,$password,$db_name);

   $image_name = round(microtime(true) * 1000) . ".jpg";

   $req="UPDATE magasin SET libelle='$name', logo='$image_name', emplacement_geo='$geo' WHERE id_magasin = $id;";

   if(mysqli_query($con,$req)) {
      // Image Upload
      file_put_contents("../resources/images/$image_name", base64_decode($logo));
      echo 0;
   }
   else {
      echo 1 . $req;
   }
?>