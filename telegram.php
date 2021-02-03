<?php

// Lets test the telegram send message function
session_start();
include_once('lib/telegram.php');
sendTelegram("Hello World!");
