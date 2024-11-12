<?php
define('DB_SERVER', '10.138.128.92'); // IP Mekki
define('DB_NAME', 'LightSocialBase');
define('DB_USERNAME', 'stranger'); 
define('DB_PASSWORD', 'stranger');


// Creating DSN (Data Source Name)
$dsn = "mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . ";charset=utf8";

try
{
    // Initialize the PDO object with the correct DSN, username, and password
    $mysqlClient = new PDO($dsn, DB_USERNAME, DB_PASSWORD);
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
