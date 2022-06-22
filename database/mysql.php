<?php

$servername = "localhost";
$username = "app";
$password = "App123!@#";
$dbname = "project";

try {
    $dbConnection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}