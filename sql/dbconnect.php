<?php
    // Autoloader
    if (file_exists('../vendor/autoload.php')) {
        require_once('../vendor/autoload.php');
    }

    // Loads .env 
    // ! It will give an error if .env does not exists
    $dotenv = Dotenv\Dotenv::createImmutable('../');
    $dotenv->load();

    $servername = $_ENV['SERVERNAME'];
    $username = $_ENV['DB_USERNAME'];
    $password = $_ENV['DB_PASSWORD'];
    $dbname = $_ENV['DB_NAME'];

    $conn = mysqli_connect($servername, $username, $password, $dbname);
?>