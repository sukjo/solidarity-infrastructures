<?php
date_default_timezone_set("America/New_York");

// Specify the directory and filename where you want to save the file
// $directory = '../../../mnt/usb/forgottens/';
$directory = 'forgottens/';

$filename = $directory . 'forgotten_at_' . date("Y.m.d_H-i") . '.txt';

if (isset($_POST['content'])) {
    $content = $_POST['content']; // Get the content from the POST request
    
    // Write the content to the file
    if (file_put_contents($filename, $content) !== false) {
        echo "i got you";
    } else {
        echo "oops it didn't work";
    }
} else {
    echo "content not received via POST";
}

?>