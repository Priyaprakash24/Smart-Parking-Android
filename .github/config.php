<?php

define('DBHOST', 'localhost');
define('DBNAME', 'smartparking');
define('DBUSER', 'root');
define('DBPASS', '');

$conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
date_default_timezone_set("Asia/Kolkata");

?>