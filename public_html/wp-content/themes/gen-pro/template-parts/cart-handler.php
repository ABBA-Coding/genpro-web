<?php
session_start();

// Получаем данные из AJAX-запроса
$action = $_POST['action'] ?? '';

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

switch ($action) {
    case 'add':
        $productId = $_POST['productId'];
        $productName = $_POST['productName'];
        $productImage = $_POST['productImage'];

        // Проверяем, есть ли уже товар в корзине
        $productIndex = array_search($productId, array_column($_SESSION['cart'], 'id'));

        if ($productIndex !== false) {
            // Если товар уже есть, увеличиваем его количество
            $_SESSION['cart'][$productIndex]['quantity'] += 1;
        } else {
            // Добавляем новый товар в корзину
            $_SESSION['cart'][] = [
                'id' => $productId,
                'name' => $productName,
                'image' => $productImage,
                'quantity' => 1
            ];
        }
        break;

    case 'update':
        // Обновление количества товара
        $productId = $_POST['productId'];
        $quantity = $_POST['quantity'];
        $productIndex = array_search($productId, array_column($_SESSION['cart'], 'id'));

        if ($productIndex !== false) {
            $_SESSION['cart'][$productIndex]['quantity'] = $quantity;
        }
        break;

    case 'remove':
        // Удаление товара из корзины
        $productId = $_POST['productId'];
        $_SESSION['cart'] = array_filter($_SESSION['cart'], function($item) use ($productId) {
            return $item['id'] !== $productId;
        });
        break;

    case 'get':
        // Возвращаем корзину из сессии
        echo json_encode($_SESSION['cart']);
        exit;
}

echo json_encode($_SESSION['cart']);
exit;
