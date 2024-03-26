<?php
// Specify the directory and filename where you want to save the file
$directory = '../../../media/twelvelemon/JOJOJO/forgottens';
$filename = $directory . 'forgotten_at_' . time() . '.txt';

$content = $_POST['content']; // Get the content from the POST request

// Write the content to the file
if (file_put_contents($file, $content) !== false) {
    echo "file written successfully";
} else {
    echo "error writing to file";
}

?>