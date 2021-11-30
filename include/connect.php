<?php
$servername = "localhost";
$usern = "root";
$paord = "";
$dbname = "yellowcapstone";

// Create connection
$yellow = new mysqli($servername, $usern, $paord, $dbname);

// Check connection
if ($yellow->connect_error) {
    die("Connection failed: " . $yellow->connect_error);
}
///echo "connect";

?> 