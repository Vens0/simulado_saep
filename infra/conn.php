<?php

$localhost = "localhost";
$username = "root";
$password = "";
$database = "simulado_saep";

$conn =new mysqli($localhost, $username, $password, $database);

if($conn->connect_error) {

    die("Erro ao conectar com o banco de dados: " . $conn->connect_error);

}
?>