<?php
// Step 1: Read raw JSON input
$inputData = file_get_contents('php://input');

// Step 2: Decode JSON into PHP array/object
$decodedData = json_decode($inputData, true);

// Step 3: Display values if valid
if ($decodedData) {
    echo "Username: " . $decodedData['username'] . "<br>";
    echo "Password: " . $decodedData['password'];
} else {
    echo "No valid JSON data received.";
}
?>