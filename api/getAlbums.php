<?php
$json_string = file_get_contents(__DIR__ . '/../data/dischi.json');
$albums = json_decode($json_string, true);
header("Content-Type: application/json");
echo json_encode($albums);
?>
