<?php

// Lets test the telegram send message function
session_start();
include_once('lib/telegram.php');
include_once('config.php');
sendTelegram($telegramBot, $telegramDestination, "Hello World!");
header('Location: index.php');
