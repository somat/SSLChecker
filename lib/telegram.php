<?php

function sendTelegram($message) {
    include_once("config.php");

    $url = 'https://api.telegram.org/bot' . $telegramBot . '/sendMessage';
    $data = array('chat_id' => $telegramDestination, 'text' => $message);
    $options = array(
        'http' => array(
            'method' => 'POST',
            'header' => "Content-Type:application/x-www-form-urlencoded\r\n",
            'content' => http_build_query($data),
        ),
    );
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    return $result;
}
