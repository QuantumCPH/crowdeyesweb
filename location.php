<?php


   echo $ip = $_SERVER['REMOTE_ADDR'];

$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}"));


echo "{$details->city}";


?>

<?php
echo $ip1 = $_REQUEST['REMOTE_ADDR']; 
$query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
if($query && $query['status'] == 'success') {
  echo $query['city'];
} else {
  echo 'Unable to get location';
}
?>
