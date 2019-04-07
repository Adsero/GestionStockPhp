<?php 

   $id=$_POST["id"];
   $zone=$_POST["zone"];

   $user="8jgfY7gyWT";
   $password="Nbpd6K16n4";
   $host="remotemysql.com";
   $db_name="8jgfY7gyWT";

   $con=mysqli_connect($host,$user,$password,$db_name);

   $image_name = round(microtime(true) * 1000) . ".jpg";

   $req="UPDATE magasin SET zone_detection='$zone' WHERE id_magasin = $id;";

   if(mysqli_query($con,$req)) {
      echo 0;
   }
   else {
      echo 1 . $req;
   }
?>