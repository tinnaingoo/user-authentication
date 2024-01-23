<?php
session_start();

// Check if the user is authenticated
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header('Location: index.html');
    exit();
}

// Save the edited JSON data
$json_file = 'post.json';
file_put_contents($json_file, $_POST['json_data']);

echo "Changes saved successfully!";
?>
