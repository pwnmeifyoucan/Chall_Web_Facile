<?php

// Bắt đầu session
session_start();

// Kiểm tra xem người dùng đã đăng nhập hay chưa
if (!isset($_SESSION['user_id'])) {
    header("Location: ./../index.php"); // Nếu chưa đăng nhập, chuyển hướng về trang login
    exit();
}

// Kết nối đến database
$host = "db";
$dbname = "data_users";
$username = "test";
$password = "pass";
$table = "users";

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Truy vấn thông tin người dùng dựa vào user_id từ session
    $userId = $_SESSION['user_id'];
    $query = "SELECT * FROM $table WHERE id = :id";
    $stmt = $db->prepare($query);
    $stmt->execute(['id' => $userId]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        echo "<h1>Informations utilisateur</h1>";
        echo "<table border='1'>";
        echo "<tr><th>Column</th><th>Value</th></tr>";

        // In ra các thông tin của người dùng
        foreach ($user as $column => $value) {
            echo "<tr><td>" . htmlspecialchars($column) . "</td><td>" . htmlspecialchars($value) . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "Informations utilisateur introuvables.";
    }

} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}