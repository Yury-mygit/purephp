<?php

$request_body = file_get_contents('php://input');
$request_data = json_decode($request_body, true);

if (!empty($request_data['data'])) {
    // Обработка данных
    $result = ['status' => 'success', 'message' => 'Data processed'];
} else {
    $result = ['status' => 'error', 'message' => 'No data provided'];
}

header('Content-Type: application/json');
echo json_encode($result);