<?php 

   $id=$_GET["id"];
   $login=$_GET["login"];
   $pass=$_GET["pass"];
	
   
   $user="root";
   $password="";
   $host="localhost";
   $db_name="AndroidGestionS";
   
   
   $con=mysqli_connect($host,$user,$password,$db_name);
   $req="INSERT INTO Client(login, pass) VALUES ('".$login."','".$pass."');";
   
   if(mysqli_query($con,$req))
      echo "Insertion réussie";
   else
      echo "Erreur d'insertion !!!";	
?>