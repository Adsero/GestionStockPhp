<?php
  $id=$_GET["id"];
  $login=$_GET["login"];
  $pass=$_GET["pass"];

  $user="root";
  $password="";
  $host="localhost";
  $db_name="AndroidGestionS";

  $con=mysqli_connect($host,$user,$password,$db_name);

  $req="UPDATE Client SET login='".$login."' AND pass='".$pass."' WHERE id=".$id."";
  
  if(mysqli_query($con,$req))
    echo "MAJ réussie";
  else
    echo"problème";
?>