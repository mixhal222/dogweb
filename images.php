<?php
$folder = 'LUKAS/';
$images = [];

// Check all image types
$allowed = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

foreach (scandir($folder) as $file) {
  $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
  if (in_array($ext, $allowed)) {
    $images[] = $file;
  }
}

echo json_encode($images);
?>
