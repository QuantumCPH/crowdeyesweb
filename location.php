<?php


   echo $ip = $_SERVER['REMOTE_ADDR'];

$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}"));


echo "{$details->city}";


?>

<?php
$ip = $_REQUEST['REMOTE_ADDR']; // the IP address to query
$query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
if($query && $query['status'] == 'success') {
  echo 'Hello visitor from '.$query['country'].', '.$query['city'].'!';
} else {
  echo 'Unable to get location';
}
?>
