<?php


   echo $ip = $_SERVER['REMOTE_ADDR'];

$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}"));


echo "{$details->city}".'<br />';


?>

<?php
echo $ip1 = $_SERVER['REMOTE_ADDR']; 
$query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
if($query && $query['status'] == 'success') {
  echo $query['city'];
} else {
  echo 'Unable to get location';
}
?>





<?php

function getLocationInfoByIp(){
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = @$_SERVER['REMOTE_ADDR'];
    $result  = array('country'=>'', 'city'=>'');
    if(filter_var($client, FILTER_VALIDATE_IP)){
        $ip = $client;
    }elseif(filter_var($forward, FILTER_VALIDATE_IP)){
        $ip = $forward;
    }else{
        $ip = $remote;
    }
    $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));    
    if($ip_data && $ip_data->geoplugin_countryName != null){
        $result['country'] = $ip_data->geoplugin_countryCode;
        $result['city'] = $ip_data->geoplugin_city;
    }
    return $result;
}


/*Get user ip address*/
$ip_address=$_SERVER['REMOTE_ADDR'];

/*Get user ip address details with geoplugin.net*/
$geopluginURL='http://www.geoplugin.net/php.gp?ip='.$ip_address;
$addrDetailsArr = unserialize(file_get_contents($geopluginURL)); 

/*Get City name by return array*/
$city = $addrDetailsArr['city']; 

/*Get Country name by return array*/
$country = $addrDetailsArr['geoplugin_countryName'];

/*Comment out these line to see all the posible details*/
/*echo '<pre>';
print_r($addrDetailsArr);
die();*/

if(!$city){
   $city='Not Define';
}if(!$country){
   $country='Not Define';
}
echo '<strong>IP Address</strong>:- '.$ip_address.'<br/>';
echo '<strong>City</strong>:- '.$city.'<br/>';
echo '<strong>Country</strong>:- '.$country.'<br/>';
?>
