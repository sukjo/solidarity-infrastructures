<?php
$content = $_POST['content']; // Get the content from the POST request

// Specify the directory and filename where you want to save the file
$filename = '../mnt/usb' . uniqid() . '.txt';

// Write the content to the file
file_put_contents($filename, $content);

// Respond to the client (optional)
echo 'File saved successfully!';
?>
