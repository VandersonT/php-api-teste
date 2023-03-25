<?php
$servername = ""; //nome do servidor
$username = ""; //nome do usuário do banco de dados
$password = ""; //senha do usuário do banco de dados
$dbname = ""; //nome do banco de dados
$response = [];

/*try{
    $pdo = new PDO("mysql:dbname=".$dbname.";host=".$servername, $username, $password);
    echo "Connection established successfully.";
}catch(PDOException $e){
    $a = [];
    $a['error'] = "It was not possible to connect to the database." . $e->getMessage();
    echo json_encode($a);
    exit;
}*/