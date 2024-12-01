<?php
require_once "utils.php";

$response["success"] = copy($_POST["from"], $_POST["to"]);

echo json_encode($response);