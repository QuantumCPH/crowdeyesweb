<?php

@$url = "http://api.ipinfodb.com/v3/ip-city/?key=$your_key&ip=$ip&format=json";
     
$d = file_get_contents($url);
$data = json_decode($d , true);
     
/*
{
"statusCode" : "OK",
"statusMessage" : "",
"ipAddress" : "74.125.45.100",
"countryCode" : "US",
"countryName" : "UNITED STATES",
"regionName" : "CALIFORNIA",
"cityName" : "MOUNTAIN VIEW",
"zipCode" : "94043",
"latitude" : "37.3956",
"longitude" : "-122.076",
"timeZone" : "-08:00"
}
*/
 
if(strlen($data['countryCode']))
{
$info = array(
    'ip' => $data['ipAddress'] ,
    'country_code' => $data['countryCode'] ,
    'country_name' => $data['countryName'] ,
    'region_name' => $data['regionName'] ,
    'city' => $data['cityName'] ,
    'zip_code' => $data['zipCode'] ,
    'latitude' => $data['latitude'] ,
    'longitude' => $data['longitude'] ,
    'time_zone' => $data['timeZone'] ,
);
}
return @$info;



echo $address = "Karachi";
$url = "http://maps.google.com/maps/api/geocode/json?address=$address&sensor=false&region=India";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$response = curl_exec($ch);
curl_close($ch);
$response_a = json_decode($response);
echo @$lat = $response_a->results[0]->geometry->location->lat;
echo "<br />";
echo @$long = $response_a->results[0]->geometry->location->lng;
?>
