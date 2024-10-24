<?php
/* https://api.telegram.org/bot7056099882:AAEKKwskPJk5NZ4pcQ2a20Xh2fYZKc0YSP0/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

session_start(); // Не забудьте запустить сессию, если этого еще не сделано

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$msg = '';
$company = '';

if (!empty($_POST['extra_field'])) {
    echo json_encode(['success' => false, 'message' => 'Spam detected']);
    exit;
}


if ($_POST['user_message']) {
    $msg = $_POST['user_message'];
}
if ($_POST['user_company']) {
    $company = $_POST['user_company'];
}


$token = "7056099882:AAEKKwskPJk5NZ4pcQ2a20Xh2fYZKc0YSP0";
$chat_id = "-1002434298842";

// Инициализируем массив с основными данными
$arr = array(
    'Имя пользователя: ' => $name,
    'Телефон: ' => $phone,
);
if ($msg) {
    $arr['Сообщение: '] = $msg;
}

if ($company) {
    $arr['Компания: '] = $company;
}
$var = false;
if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];

    // Проходим по массиву товаров в корзине
    foreach ($cart as $item) {
        // Собираем название продукта и количество
        $productName = $item['name'];
        $quantity = $item['quantity'];

        $var = true;
        $arr["Продукт: $productName"] = "Кол-во: $quantity";
    }
}

// Инициализируем переменную $txt, чтобы не было ошибки
$txt = '';

foreach ($arr as $key => $value) {
    $txt .= "<b>" . $key . "</b> " . $value . "\n";
}

// Кодируем текст для URL
$txt = urlencode($txt);

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");


$response = array(); // Инициализируем массив для ответа

if ($sendToTelegram) {
    $response['success'] = true; // Успешно отправлено
} else {
    $response['success'] = false; // Ошибка при отправке
}

// Очищаем корзину, если она была отправлена
if ($var == true && isset($_SESSION['cart'])) {
    unset($_SESSION['cart']); // Очищаем данные корзины
}

// Возвращаем ответ в формате JSON
header('Content-Type: application/json');
echo json_encode($response);