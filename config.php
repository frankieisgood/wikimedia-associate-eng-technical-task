<?php
$host = 'localhost';
$username = 'root';
$password = getenv(ROOT_PW); 
$dbname = "donor_form";
$dsn = "mysql:host=$host;dbname=$dbname";
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);