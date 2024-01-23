<?php
session_start();

// Check if the user is authenticated
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header('Location: index.html');
    exit();
}

// Load the JSON data
$json_file = 'post.json';
$json_data = json_decode(file_get_contents($json_file), true);

// Display the JSON data for editing
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit JSON</title>
</head>
<body>
    <h2>Edit JSON</h2>
    <form action="save.php" method="post">
        <textarea name="json_data"><?php echo json_encode($json_data, JSON_PRETTY_PRINT); ?></textarea>
        <br>
        <input type="submit" value="Save">
    </form>
    <br>
    <a href="logout.php">Logout</a>
</body>
</html>
