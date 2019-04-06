<?php 

   $id=$_GET["id"];
   $name=$_GET["name"];
   $lastname=$_GET["lastname"];
   $date_naiss="1999-12-31";
   $login=$_GET["login"];
   $pass=$_GET["pass"];
	
   
   $user="root";
   $password="";
   $host="localhost";
   $db_name="AndroidGestionS";
   
   
   $con=mysqli_connect($host,$user,$password,$db_name);
   $req="UPDATE Annonceur SET nom = '".$name."', prenom = '".$lastname."', date_naiss = '".$date_naiss."', login ='".$login."', pass = '".$pass."' WHERE id = ".$id.";";
   
   if(mysqli_query($con,$req))
      echo 0;
   else
      echo 1 . "Erreur d'insertion !!!";	
?>