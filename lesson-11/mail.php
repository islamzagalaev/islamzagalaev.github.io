<?php
//Принимаем постовые данные
$whatever=$_POST['whatever'];
$username=$_POST['username'];
$email=$_POST['email'];
$user_message=$_POST['user_message'];

//Тут указываем на какой ящик посылать письмо
$to = "islam4ik70@mail.ru";

//Далее идет тема и само сообщение
// Тема письма
$subject = "Заявка с сайта";

// Сообщение письма
$message = "
Форма, заполненная пользователем: ".htmlspecialchars($whatever)."<br />
Имя пользователя: ".htmlspecialchars($username)."<br />
Email: ".htmlspecialchars($email)."<br />
User_message: ".htmlspecialchars($user_message);

// Отправляем письмо при помощи функции mail();
$headers = "From: issywebarts.ru <issywebarts@inbox.ru>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);

// Перенаправляем человека на страницу благодарности и завершаем скрипт

exit();
?>
