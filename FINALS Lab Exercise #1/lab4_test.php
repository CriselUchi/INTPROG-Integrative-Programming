<?php
// This will send test JSON data to lab4_input.php
$url = "http://localhost/lab4_input.php";
$data = ['username' => 'admin', 'password' => '1234'];
$jsonData = json_encode($data);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

echo $response;
?>