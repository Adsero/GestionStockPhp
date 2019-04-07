<?php

	$latitude = $_GET['lat']; // 33.829262
	$longitude = $_GET['lng']; // -4.839340
	

	$user="8jgfY7gyWT";
	$password="Nbpd6K16n4";
	$host="remotemysql.com";
	$db_name="8jgfY7gyWT";

	$con=mysqli_connect($host,$user,$password,$db_name);
	$req="SELECT * FROM magasin;";
	
	$result=mysqli_query($con,$req);
	$tableau=array();

	while($ligne=mysqli_fetch_assoc($result))
	{
		$tableau[]=$ligne; 
	}

	// echo json_encode($tableau);
   
	mysqli_close($con);

	function distance($lat1, $lon1, $lat2, $lon2, $unit) {

		$theta = $lon1 - $lon2;
		$dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
		$dist = acos($dist);
		$dist = rad2deg($dist);
		$miles = $dist * 60 * 1.1515;
		$unit = strtoupper($unit);

		if ($unit == "K") {
			return ($miles * 1.609344);
		} else if ($unit == "N") {
			return ($miles * 0.8684);
		} else {
			return $miles;
		}
	}

	$nearby = [];
	foreach ($tableau as $store) {
		echo("<br />");
		$lat = explode(",", $store['emplacement_geo'])[0];
		$lng = explode(",", $store['emplacement_geo'])[1];
		if (distance($lat, $lng, $latitude, $longitude, 'K') < 2) {
			$nearby[] = $store;
		}
		// echo "The distance between " . $lat . "," . $lng . " and " . $latitude . "," . $longitude . " is " . distance($lat, $lng, $latitude, $longitude, 'K');
	}
	print_r($nearby);


?>