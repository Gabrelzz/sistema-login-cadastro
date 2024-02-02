<?php

$host = "127.0.0.1";
$dbname = "sistema_login";
$user = "root";
$password ="root";

try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Conexão com sucesso" . PHP_EOL;

}catch(PDOException $e){
    echo "Erro na conexão" . $e->getMessage();
}