<?php
    require('../config.php');
    
    

    $method = strtolower($_SERVER['REQUEST_METHOD']);

    if($method === 'get'){

        $request_uri = $_SERVER['REQUEST_URI'];
        $uri_parts = explode('/', $request_uri);
        $id = end($uri_parts);
        $id = preg_replace('/[^0-9]/', '', $id);

        $response['teste'] = $id;

        $response['success'] = 'xo requisitar: '.$_SERVER['REQUEST_METHOD'];
        
    }else{
        $response['error'] = 'Essa rota so tem permissao para requisicoes do tipo GET.'.$_SERVER['REQUEST_METHOD'];
    }

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");
    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

    echo json_encode($response);
    exit;