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
# Collect a specific users GEOIP info
echo $info = geoip_record_by_name($_SERVER['REMOTE_ADDR']);
print_r ($info);

# To get the info from one specific field
$country = $info['country_name'];
echo $country;

# To combine information from the array into a string
$info = implode("/", $info);
echo $info;
?>
