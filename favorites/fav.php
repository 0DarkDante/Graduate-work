<?php
// Підключення до бази даних
$host = 'localhost';
$username = 'your_username';
$password = 'your_password';
$dbname = 'your_database_name';

$conn = new mysqli('localhost', 'root', 'root', 'register-vk');

// Перевірка підключення до бази даних
if ($conn->connect_error) {
    die('Помилка підключення до бази даних: ' . $conn->connect_error);
}

// Отримання обраних товарів для поточного користувача
$user_id = $_SESSION['id']; // Поточний ідентифікатор користувача, який авторизований

$sql = "SELECT catalog.id, catalog.name, catalog.price, catalog.description
        FROM catalog
        INNER JOIN favorites ON catalog.id = favorites.product_id
        WHERE favorites.user_id = $user_id";

$result = $conn->query($sql);

// Масив для збереження обраних товарів
$favorite_products = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $favorite_products[] = $row;
    }
}

// Закриття з'єднання з базою даних
$conn->close();
?>