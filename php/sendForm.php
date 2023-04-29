<?php 
$chatid = "-853422560";

$botToken = "6254011826:AAFVZpbskF0PdkJ16RSMuV_cxY7Qqe21TcE";

$phone = $_GET['phone'];
$message = $_GET['message'];
$resultMessage = "номер телефона ".$phone. " Информация: ".$message;
message_to_telegram('Привет!');

function message_to_telegram($text)
{
    global $chatid;
    global $botToken;
    global $resultMessage;
    $ch = curl_init();
    curl_setopt_array(
        $ch,
        array(
            CURLOPT_URL => 'https://api.telegram.org/bot' . $botToken . '/sendMessage',
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_POSTFIELDS => array(
                'chat_id' => $chatid,
                'text' => $resultMessage,
            ),
        )
    );
    curl_exec($ch);
}


