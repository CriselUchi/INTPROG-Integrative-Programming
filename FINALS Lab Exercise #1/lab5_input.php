<?php
header("Content-Type: application/json; charset=UTF-8");

$input = file_get_contents("php://input");
$data = json_decode($input, true);

if ($data && isset($data["username"]) && isset($data["password"])) {
    $username = $data["username"];
    $password = $data["password"];

    if ($username === "admin" && $password === "1234") {
        $response = [
            "status" => "success",
            "message" => "Welcome, Crisel Francisco!"
        ];
    } else {
        $response = [
            "status" => "error",
            "message" => "Invalid credentials."
        ];
    }
} else {
    $response = [
        "status" => "error",
        "message" => "Missing data."
    ];
}

echo json_encode($response);
?>