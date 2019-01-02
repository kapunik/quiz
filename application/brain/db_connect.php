<?php

$host = 'localhost';
$user = 'quiz';
$pass = 'quiz';
$dbname = 'quiz';

$mysqli = new mysqli($host, $user, $pass, $dbname);

/* проверка соединения */
if ($mysqli->connect_errno) {
    printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
    exit();
}
