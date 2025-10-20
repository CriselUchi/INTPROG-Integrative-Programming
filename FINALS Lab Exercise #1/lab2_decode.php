<?php
$jsonString = '{"name":"Ma. Crisel Francisco","age":19,"email":"franciscomacriselbsit@plmun.edu.ph"}';

$object = json_decode($jsonString);

$array = json_decode($jsonString, true);

echo "Object: " . $object->name . "\n";
echo "Array: " . $array['email'];
?>
