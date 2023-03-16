<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {
  // POSTリクエストを受け取る処理
  $name = $_POST['name'];
  $email = $_POST['email'];

  // 応答を作成する
  $response = array(
    'status' => 'success',
    'message' => 'Received data: ' . $name . ', ' . $email
  );

  // 応答をJSON形式で返す
  header('Content-Type: application/json');
  echo json_encode($response);
}