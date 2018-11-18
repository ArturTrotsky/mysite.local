<?php

// Видео 4_12. Тема: "Пространство имён".
// Пример с урока

use ru\google\User as GoogleUser;
use ru\myrusakov\User;
require_once '412.a.php';
require_once '412.b.php';

$user = new User();
$user->name = 'Michael';
echo $user->name . '<br />';

$g_user = new GoogleUser();
$g_user->email = 'abc@mail.ru';
echo $g_user->email . '<br />';

$user = new ru\google\User();
$user->email = '123@mail.ru';
echo $user->email . '<br />';
