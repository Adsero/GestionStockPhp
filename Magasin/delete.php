<?php

  $problems = 0;

  $id=$_GET["id"];

  $user="8jgfY7gyWT";
  $password="Nbpd6K16n4";
  $host="remotemysql.com";
  $db_name="8jgfY7gyWT";

  $con=mysqli_connect($host,$user,$password,$db_name);

  $req="SELECT * FROM magasin WHERE id_magasin=$id;";
  
  $result=mysqli_query($con,$req);
  $tableau=array();

  while($ligne=mysqli_fetch_assoc($result))
  {
    $tableau[]=$ligne; 
  }

  $ownerID = $tableau[0]['proprietaire'];

  $req="DELETE FROM Produit WHERE annonceur_id=$ownerID;";

  if(mysqli_query($con,$req))
    $problems = 0;
  else
    $problems = 1;

  $req="DELETE FROM Annonceur WHERE id=$ownerID;";
  
  if(mysqli_query($con,$req))
    $problems = 0;
  else
    $problems = 1;

  $req="DELETE FROM Magasin WHERE id_magasin=$id;";
  
  if(mysqli_query($con,$req))
    $problems = 0;
  else
    $problems = 1;
  
  echo $problems;

?>