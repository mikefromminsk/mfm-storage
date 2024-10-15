<?php
include_once "utils.php";

$response["success"] = move_uploaded_file($_FILES["file"]["tmp_name"], $_POST["filename"]);

echo json_encode($response);


