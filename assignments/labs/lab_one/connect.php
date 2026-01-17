<?php
declare(strict_types=1);
// declaring and initializing vars to connect to the Db
$host = "localhost";
$db = "Lab_1_db";
$user = "root";
$password = "root";

// honestly, have no clue what this line of code means, just copied it from our last class's code
$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

// classic try-catch block to ensure that if any error occurs we can handle it
try {
    // Again, don't know what this means
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prints out the message if we successfully connected to the Db
    echo "<p>Connected successfully to your database.</p><br>";
} catch (PDOException $e) {
    // crashes out the program if PDOException occurs
    die("Connection failed: " . $e->getMessage());
}


?>
