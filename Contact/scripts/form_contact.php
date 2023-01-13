<?php

// Connect to the database
$pdo = new PDO('mysql:host=localhost;dbname=website_gamestars');

$sql = file_get_contents('database_gamestars.sql');

$pdo->exec($sql);

try {
    // Connect to the database
    $pdo = new PDO('mysql:host=localhost;dbname=mydatabase', 'username', 'password');
  } catch (PDOException $e) {
    // Display an error message if the connection fails
    echo "Error: " . $e->getMessage();
    exit;
  }
// Insert the form data into the database
$query = "INSERT INTO users (naam, email) VALUES (?, ?)";
$stmt = $pdo->prepare($query);
$stmt->execute([$_POST['naam'], $_POST['email']]);

?>