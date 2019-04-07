<?php 

   $id=$_GET["id"];
   $login=$_GET["login"];
   $pass=$_GET["pass"];
	
   
  $user="8jgfY7gyWT";
  $password="Nbpd6K16n4";
  $host="remotemysql.com";
  $db_name="8jgfY7gyWT";

  $con=mysqli_connect($host,$user,$password,$db_name);
   $req="INSERT INTO client(login, pass) VALUES ('".$login."','".$pass."');";
   
   if(mysqli_query($con,$req))
      echo "Insertion réussie";
   else
      echo "Erreur d'insertion !!!";	
?>