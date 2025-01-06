<?php
// Токен, который ты получил от BotFather
$token = "8132613540:AAETvL-G4a_j1S4HOmMu6TJRjlnGVurFsHQ";

// Получаем данные от Telegram
$update = json_decode(file_get_contents('php://input'), TRUE);
$message = $update['message']['text']; // Текст сообщения
$chatId = $update['message']['chat']['id']; // ID чата

// Простой ответ на команду /start
if ($message == "/start") {
    $response = "Привет, я твой бот!";
} else {
    $response = "Ты написал: " . $message;
}

// Отправляем ответ пользователю
file_get_contents("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chatId}&text=" . urlencode($response));
?>
