<?php 



define("DB_HOST", "localhost:3310");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "cineticket");


// Create Connection using mysqli procedural
$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check Connection
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

