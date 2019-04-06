<?php

  $id=$_GET["id"];

  $user="root";
  $password="";
  $host="localhost";
  $db_name="AndroidGestions";

  $con=mysqli_connect($host,$user,$password,$db_name);
  $req="DELETE FROM Produit WHERE id='".$id."';";

  if(mysqli_query($con,$req))
    echo 0;
  else
    echo 1;
  
?>