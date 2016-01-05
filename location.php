<?php
$jsondata=file_get_contents(‘http://maps.google.com/maps/api/geocode/json?address=house+16+road+7+Baridhara+Dhaka+Bangladesh&sensor=false&#8217;);

$output= json_decode($jsondata);

$latitude = $output->results[0]->geometry->location->lat;
$longitude = $output->results[0]->geometry->location->lng;

echo “Latitude : “.$lat;
echo “Longitude : “.$long;
 
?>