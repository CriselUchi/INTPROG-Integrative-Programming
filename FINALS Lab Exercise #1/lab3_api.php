<?php
header('Content-Type: application/json');

$userProfile = [
    "id" => 1,
    "name" => "Ma. Crisel Francisco",
    "email" => "franciscomacriselbsit@plmun.edu.ph",
    "status" => "active"
];

echo json_encode($userProfile);
?>
