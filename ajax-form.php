<?php
//Для начала проверим есть ли данные в полях name и email, что бы не слать совсем пустые формы :)
//Если всё в порядке, то работаем дальше
if (isset($_POST["name"]) && isset($_POST["mobile"]) ) { 

//Принимаем данные POST-запроса и записываем значения в переменные

$name = $_POST['name'];
$mobile = $_POST['mobile']; 
$email = $_POST['email'];
$message = $_POST['message'];

//Теперь давайте настроим куда отправляем и откуда

$my_email = 'olegetm@mail.ru'; // Куда отправляем
$sender_email = '<coolang@coolang.ru>'; // От кого отправляем
$title = "Ура,нам письмо пришло"; 

//Сообщение, которое приходит на почту со всеми нужными нам данными:

$mes = "
 Имя: $name\n
 Телефон: $mobile\n
 Комментарий: $message\n
 Позвонить по телефону: $Calltel\n
 Написать в WhatsApp: $WriteWhat\n
 Написать в Telegram: $WriteTeleg\n
";

//Всё, теперь можно отправлять письмо на почту

$send = mail ($my_email,$title,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$sender_email");

}

?>