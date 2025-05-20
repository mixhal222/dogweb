<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $filename = basename($_POST['filename']); // prevent directory attacks
  $filePath = _DIR_ . '/LUKAS/' . $filename;

  if (file_exists($filePath)) {
    unlink($filePath);
    echo "Deleted: $filename";
  } else {
    echo "File not found.";
  }
}
?>
