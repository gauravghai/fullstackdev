<?php
$DB_SERVER = "localhost";
$DB_USERNAME = "id20335054_localhost";
$DB_PASSWORD = "agpHAD\If<PQ9@!v";
$DB_NAME = "id20335054_blog";

$base_url = 'http://localhost/blog/';
/* Attempt to connect to MySQL database */
$link = new mysqli($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>