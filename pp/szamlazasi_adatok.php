<?php
session_start();

// Print the value of item_name from the session
$item_name = $_POST['item_name'] ?? '';

echo "Item Name: " . $item_name;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
</body>
</html>