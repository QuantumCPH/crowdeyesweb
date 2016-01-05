<?php




?>

<?php
$ip = $_REQUEST['REMOTE_ADDR']; // the IP address to query
$query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
if($query && $query['status'] == 'success') {
  echo $query['city'];
} else {
  echo 'Unable to get location';
}
?>
