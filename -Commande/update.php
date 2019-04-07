<?php
  $id=$_GET["id"];
  $idC=$_GET["idC"];
  $total=$_GET["total"];

  $user="root";
  $password="";
  $host="localhost";
  $db_name="AndroidGestionS";

  $con=mysqli_connect($host,$user,$password,$db_name);

  $req="UPDATE Commande SET idC=".$idC." AND total=".$total." WHERE id=".$id."";
  
  if(mysqli_query($con,$req))
    echo "MAJ réussie";
  else
    echo"problème";
?>