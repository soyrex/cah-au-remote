<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$mysql = new mysqli($server, $username, $password, $db);

 $mysql->query("CREATE TABLE white (id INT(4) NOT NULL AUTOINCREMENT, text VARCHAR(128) NOT NULL DEFAULT '', CONSTRAINT id PRIMARY KEY(id))");

$res = $mysql->query("SHOW TABLES);
print_r($res);

?>
What's your name?
