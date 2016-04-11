<?php
$url = parse_url(getenv("mysql://b9b98665377990:b375b17e@us-cdbr-iron-east-03.cleardb.net/heroku_0b5ab614720338a?reconnect=true"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);
?>
