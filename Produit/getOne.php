<?php

   $id=$_GET["id"];
   
   $user="8jgfY7gyWT";
   $password="Nbpd6K16n4";
   $host="remotemysql.com";
   $db_name="8jgfY7gyWT";

   $con=mysqli_connect($host,$user,$password,$db_name);
   $req="SELECT p.*, m.libelle FROM produit p, magasin m WHERE p.id='$id' AND p.magasin=m.id_magasin;";
   
   $result=mysqli_query($con,$req);
   $tableau=array();

   while($ligne=mysqli_fetch_assoc($result))
   {
      $tableau[]=$ligne; 
   }
 
   echo json_encode($tableau);
   
   mysqli_close($con);
?>