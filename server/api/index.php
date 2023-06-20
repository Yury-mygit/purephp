<?php

$request_method = $_SERVER['REQUEST_METHOD'];
$request_uri = $_SERVER['REQUEST_URI'];

if ($request_method === 'POST') {
    $request_body = file_get_contents('php://input');
}


if (empty($_POST)) {
    http_response_code(400); 
    echo "Неверный запрос: массив POST пустой."; 
    exit; 
};

$way = $_POST['way'];
$data = $_POST['data'];

$response = ['status' => 'ok', 'way' => $way, 'data'=>$data.'sawewe'];

echo json_encode($response);

