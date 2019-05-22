<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="laravel_ranking";
// Create connection
$link = new mysqli($servername, $username, "", $dbname);
// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}
?>
