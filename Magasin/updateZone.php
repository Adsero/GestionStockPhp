<?php 

   $id=$_POST["id"];
   $zone=$_POST["zone"];

   $user="root";
   $password="";
   $host="localhost";
   $db_name="AndroidGestionS";

   $con=mysqli_connect($host,$user,$password,$db_name);

   $image_name = round(microtime(true) * 1000) . ".jpg";

   $req="UPDATE Magasin SET zone_detection='$zone' WHERE id_magasin = $id;";

   if(mysqli_query($con,$req)) {
      echo 0;
   }
   else {
      echo 1 . $req;
   }
?>