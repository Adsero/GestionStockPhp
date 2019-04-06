<?php 

   $id=$_GET["id"];
   $name=$_GET["name"];
   $lastname=$_GET["lastname"];
   $date_naiss=$_GET["date_naiss"];
   $login=$_GET["login"];
   $pass=$_GET["pass"];
	
   
   $user="root";
   $password="";
   $host="localhost";
   $db_name="AndroidGestionS";
   
   
   $con=mysqli_connect($host,$user,$password,$db_name);
   $req="INSERT INTO Annonceur(nom, prenom, date_naiss, login, pass) VALUES ('".$name."','".$lastname."','".$date_naiss."','".$login."','".$pass."');";
   
   if(mysqli_query($con,$req))
      echo mysqli_insert_id($con);
   else
      echo "Erreur d'insertion !!!";	
?>