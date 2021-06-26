<?php
    // Autoloader
    if (file_exists(__DIR__.'/../vendor/autoload.php')) {
        require_once(__DIR__.'/../vendor/autoload.php');
    }
    else
        echo"not found";

    // Loads .env 
    // ! It will give an error if .env does not exists
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../');
    $dotenv->load();

    // * Envionment variables defined in .env
    // * Refer .env.example 
    $servername = $_ENV['SERVERNAME'];
    $username = $_ENV['DB_USERNAME'];
    $password = $_ENV['DB_PASSWORD'];
    $dbname = $_ENV['DB_NAME'];

    $conn = mysqli_connect($servername, $username, $password, $dbname);
?>