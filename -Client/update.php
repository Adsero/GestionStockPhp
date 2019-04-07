<?php
  $id=$_GET["id"];
  $login=$_GET["login"];
  $pass=$_GET["pass"];

  $user="8jgfY7gyWT";
  $password="Nbpd6K16n4";
  $host="remotemysql.com";
  $db_name="8jgfY7gyWT";

  $con=mysqli_connect($host,$user,$password,$db_name);

  $req="UPDATE client SET login='".$login."' AND pass='".$pass."' WHERE id=".$id."";
  
  if(mysqli_query($con,$req))
    echo "MAJ réussie";
  else
    echo"problème";
?>