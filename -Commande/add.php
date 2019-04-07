<?php 

   $id=$_GET["id"];
   $idC=$_GET["idC"];
   $total=$_GET["total"];
	
   
   $user="root";
   $password="";
   $host="localhost";
   $db_name="AndroidGestionS";
   
   
   $con=mysqli_connect($host,$user,$password,$db_name);
   $req="INSERT INTO Commande(id, idC, total) VALUES (".$id.",'".$idC."','".$total."');";
   
   if(mysqli_query($con,$req))
      echo "Insertion réussie";
   else
      echo "Erreur d'insertion !!!";	
?>