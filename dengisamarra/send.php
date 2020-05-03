<?php
$name = $_POST['name'];
$email = $_POST['email'];
$text = $_POST ['text'];
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$text = htmlspecialchars($text);
$name = urldecode($name);
$email = urldecode($email);
$text = urldecode($text);
$name = trim($name);
$email = trim($email);
$text = trim($text);
mail ("samarra.10@mail.ru","Комментарий",$text,$email)