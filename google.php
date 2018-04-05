<?php
define("APIKEY", "AIzaSyAPxh5P3khkwRCD4GhcBT0wCRHHY4D4KDw");
/*
https://maps.googleapis.com/maps/api/place/details/json?placeid=ChIJ7aLYZp0oQg0RWoitk33wlBA&key=AIzaSyAPxh5P3khkwRCD4GhcBT0wCRHHY4D4KDw

*/
$placeID = "ChIJ7aLYZp0oQg0RWoitk33wlBA"; // these are stored in the DB

$url = "https://maps.googleapis.com/maps/api/place/details/xml?placeid=".urlencode($placeID)."&key=".APIKEY ;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$response = curl_exec($ch);
curl_close($ch);

// $response now contains all info Google has on this location in XML format
$xml=simplexml_load_string($response) or die("Error: Cannot create object");
// $xml contains all items from the xml in an array
foreach ($xml->result->opening_hours->weekday_text as $day){
	echo $day.'<br>';
	
}
//print_r( $xml->result->opening_hours->weekday_text);

//print_r($xml); 
