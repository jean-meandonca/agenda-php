<?php
    $host = "localhost";
    $dbname = "agenda2";
    $user = "root";
    $pass = "";
    $port = "3007";

    try{    
        $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $user, $pass);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOExpection $e){
        $error = $e->getMessage();
        echo "Erro: $error";
    }