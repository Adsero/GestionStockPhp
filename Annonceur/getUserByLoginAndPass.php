<?php

   $login=$_GET["login"];
   $pass=$_GET["pass"];
   
   $user="8jgfY7gyWT";
   $password="Nbpd6K16n4";
   $host="remotemysql.com";
   $db_name="8jgfY7gyWT";

   $con=mysqli_connect($host,$user,$password,$db_name);
   $req="SELECT * FROM annonceur WHERE login='".$login."' AND pass='".$pass."';";
   
   $result=mysqli_query($con,$req);
   $tableau=array();

   while($ligne=mysqli_fetch_assoc($result))
   {
      $tableau[]=$ligne; 
   }
 
   echo json_encode($tableau);
   
   mysqli_close($con);
?>