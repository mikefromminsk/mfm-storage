<?php
require_once "utils.php";

$filename = $_POST["filename"];
$response["success"] = move_uploaded_file($_FILES["file"]["tmp_name"], $filename);

$width = intval($_POST["width"]);
$height = intval($_POST["height"] ?: -1);
if ($width != null) {
    $image = imagecreatefrompng($filename);
    $scaled = imagescale($image, $width, $height);
    imagealphablending($scaled, false);
    imagesavealpha($scaled, true);
    imagepng($scaled, $filename);
}

echo json_encode($response);