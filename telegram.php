<?php

/* https://api.telegram.org/bot1275025262:AAGToyaECfAy8fTez1aKDvxkVoxJGHDWaNU/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

// $name = $_POST['user_name'];
// $phone = $_POST['user_phone'];
// $email = $_POST['user_email'];
// $token = "1275025262:AAGToyaECfAy8fTez1aKDvxkVoxJGHDWaNU";
// $chat_id = "-404735242";
// $txt = "";
// $arr = array(
//   'Імя Користувача: ' => $name,
//   'Телефон: ' => $phone,
//   'Email' => $email
// );

// foreach($arr as $key => $value) {
//   $txt .= "<b>".$key."</b> ".$value."%0A";
// };

// $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

// if ($sendToTelegram) {
//   header('Location: thank-you.html');
// } else {
//   echo "Error";
// }

$token ='1275025262:AAGToyaECfAy8fTez1aKDvxkVoxJGHDWaNU';
$chatid = '-404735242';
$success = 'Сообщение отправлено';
$text_error = 'Форма не заполнена';
 
 
 
 
 
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
 
//данные из форм
$name = trim($_POST['user_name']);
$phone = trim($_POST['user_phone']);
$email = trim($_POST['user_email']);
 
// сообщение
$tmtext = array(
"Имя" => $name,
"Телефон" => $phone,
"Mail" => $email,
);
//собираем все в сообщение
$txt='';
foreach($tmtext as $key => $value) { 
     $txt .= "".$key.": ".$value."%0A"; 
  }
#Отправляем сообщение
fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chatid}&parse_mode=html&text={$txt}","r");
echo $success;
 
 
}
else{
	echo $text_error;
}
?>
