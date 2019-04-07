<?php 

   $id=$_GET["id"];
   $name=$_GET["name"];
   $lastname=$_GET["lastname"];
   $date_naiss=$_GET["date_naiss"];
   $login=$_GET["login"];
   $pass=$_GET["pass"];
	
   
   $user="8jgfY7gyWT";
   $password="Nbpd6K16n4";
   $host="remotemysql.com";
   $db_name="8jgfY7gyWT";
   
   
   $con=mysqli_connect($host,$user,$password,$db_name);
   $req="INSERT INTO annonceur(nom, prenom, date_naiss, login, pass) VALUES ('".$name."','".$lastname."','".$date_naiss."','".$login."','".$pass."');";
   
   if(mysqli_query($con,$req))
      echo mysqli_insert_id($con);
   else
      echo "Erreur d'insertion !!!";	
?>