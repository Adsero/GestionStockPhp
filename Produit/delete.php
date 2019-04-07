<?php

  $id=$_GET["id"];

  $user="8jgfY7gyWT";
  $password="Nbpd6K16n4";
  $host="remotemysql.com";
  $db_name="8jgfY7gyWT";

  $con=mysqli_connect($host,$user,$password,$db_name);
  $req="DELETE FROM produit WHERE id='".$id."';";

  if(mysqli_query($con,$req))
    echo 0;
  else
    echo 1;
  
?>