<?php
$servername = "localhost";
$username = "zanna";
$password = "helloyou";
$dbname = "web2";

// Krijimi i lidhjes
$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrollimi i lidhjes
if ($conn->connect_error) {
    die("Lidhja dështoi: " . $conn->connect_error);
    echo "hc";
}

