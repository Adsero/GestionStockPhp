<?php

   $id=$_POST["id"];
   
   $user="root";
   $password="";
   $host="localhost";
   $db_name="AndroidGestionS";

   $con=mysqli_connect($host,$user,$password,$db_name);
   $req="SELECT m.* FROM Annonceur a, Magasin m WHERE a.id='$id' AND m.proprietaire=a.id;";
   
   $result=mysqli_query($con,$req);
   $tableau=array();

   while($ligne=mysqli_fetch_assoc($result))
   {
      $tableau[]=$ligne; 
   }
 
   echo json_encode($tableau);
   
   mysqli_close($con);
?>