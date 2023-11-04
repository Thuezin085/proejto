<?php

$servername = "localhost";
$username = "root";
$password = '';
$database = "proejto"; 

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS usuarios (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
)";


$conn->query($sql);



$sql = "CREATE TABLE IF NOT EXISTS pets (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(30) NOT NULL,
    raca VARCHAR(30) NOT NULL,
    data_desaparecido DATE NULL,
    detalhes TEXT NULL,
    foto VARCHAR(255) NULL
)";

$conn->query($sql);


// $conn->close(); 