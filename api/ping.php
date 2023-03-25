<?php
    require('../config.php');

    $array = [];
    $method = strtolower($_SERVER['REQUEST_METHOD']);
    if($method === 'get'){
        $array['success'] = 'xo requisitar: '.$_SERVER['REQUEST_METHOD'];
    }else{
        $array['error'] = 'Essa rota so tem permissao para requisicoes do tipo GET.'.$_SERVER['REQUEST_METHOD'];
    }

    $array['pong'] = "true";

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");
    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

    echo json_encode($array);
    exit;