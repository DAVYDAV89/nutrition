<?php
//Принимаем постовые данные
$name=$_POST['name'];
$phone=$_POST['phone'];
$what=$_POST['what'];
$address=$_POST['address'];
//На какой ящик посылать письмо
$to = "davidos.corp@gmail.com";
//Тема и сообщение
$subject = "Заявка с сайта: Диетолог";
$message = "Письмо отправлено из моей формы. 
Пользователь хочет: ".htmlspecialchars($what)." 
Имя: " .htmlspecialchars($name)."
Телефон: ".htmlspecialchars($phone)."
Адресс: ".htmlspecialchars($address);
$headers .= 'Cc: roman@corp-davydov.ru' . "\r\n"; // копия сообщения на этот адрес
mail ($to, $subject, $message, $headers);
header("Location: ".$_SERVER['HTTP_REFERER']);
exit();
?>