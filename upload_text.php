<?php
require_once "utils.php";

$filename = $_POST["filename"];
$file = $_POST["file"];

$response[success] = file_put_contents($filename, $file);

echo json_encode($response);