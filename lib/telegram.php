<?php

function sendTelegram($source, $destination,$message) {
    $url = 'https://api.telegram.org/bot' . $source . '/sendMessage';
    $data = array('chat_id' => $destination, 'text' => $message);
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
