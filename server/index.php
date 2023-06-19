<?php

$request_method = $_SERVER['REQUEST_METHOD'];
$request_uri = $_SERVER['REQUEST_URI'];

// die(var_dump($request_uri));

// Проверяем, является ли запрос методом POST
if ($request_method === 'POST') {
    switch ($request_uri) {
        case '/api/wayone.php':
            $response = ['status' => 'ok', 'way' => 'one'];
            break;
        case '/api/waytwo.php':
            $response = ['status' => 'ok', 'way' => 'two'];
            break;
        default:
            http_response_code(404);
            die('Error: Invalid endpoint');
    }

    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    http_response_code(405);
    die('Error: Invalid method');
}
