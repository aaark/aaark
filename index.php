<?php 
$cookie_name = "count";
$cookie_value = $_COOKIE[$cookie_name] || 20;
$cookie_value = $cookie_value + 1;
setcookie($cookie_name, $cookie_value, time() + (10 * 365 * 24 * 60 * 60), "/");
header( 'Location: /index.html' );
?>