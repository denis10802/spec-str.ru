<?php 
$name = trim($_POST['username']);
$phone = trim($_POST['phone']);
$hidden = trim($_POST['title']);
$fromMail = 'sila-str@sila-str.ru'; //Почта отправителя (в домене почты должен быть адрес вашего сайта)
$fromName = 'Поступила заявка с сайта'; //Заголовок письма
$emailTo = 'Sila-str@yandex.ru'; //Ваша почта
$subject = 'Форма обратной связи sila-str.ru';
$subject = '=?utf-8?b?'. base64_encode($subject) .'?='; 
$headers = "Content-type: text/plain; charset=\"utf-8\"\r\n"; 
$headers .= "From: ". $fromName ." <". $fromMail ."> \r\n"; 

// Содержимое письма 
$body = "Получено письмо с сайта \n Имя: $name\nТелефон: $phone\n С какой формы пришла заявка : $hidden";

// сообщение будет отправлено в случае, если поле с номером телефона не пустое 
if (strlen($phone) > 0) { 
$mail = mail($emailTo, $subject, $body, $headers, '-f'. $fromMail ); 
return;
} 

?>