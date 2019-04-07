<?php

   $id=$_POST["id"];
   
   $user="8jgfY7gyWT";
   $password="Nbpd6K16n4";
   $host="remotemysql.com";
   $db_name="8jgfY7gyWT";

   $con=mysqli_connect($host,$user,$password,$db_name);
   $req="SELECT m.* FROM annonceur a, magasin m WHERE a.id='$id' AND m.proprietaire=a.id;";
   
   $result=mysqli_query($con,$req);
   $tableau=array();

   while($ligne=mysqli_fetch_assoc($result))
   {
      $tableau[]=$ligne; 
   }
 
   echo json_encode($tableau);
   
   mysqli_close($con);
?>