<html>
<head>
<title>Форма заявки с сайта</title>
</head>
<body>
<?php

/* https://api.telegram.org/bot1249014125:AAG6TmozXRpLylxPYxLm-QUVSyNd2hApqtA,*/



//Даные телеграмм
$token ='1249014125:AAG6TmozXRpLylxPYxLm-QUVSyNd2hApqtA';
$chatid = '-456716925';
$success = 'Сообщение отправлено';
$text_error = 'Форма не заполнена';





if ($_SERVER['REQUEST_METHOD'] == 'POST'){

//данные из форм
$name = trim($_POST['name']);
$phone = trim($_POST['phone']);

// сообщение
$tmtext = array(
"Имя" => $name,
"Телефон" => $phone,
);
//собираем все в кучу
$txt='';
foreach($tmtext as $key => $value) { 
     $txt .= "<b>".$key."</b>: ".$value."%0A"; 
  }
#Отправляем сообщение
fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chatid}&parse_mode=html&text={$txt}","r");

$url = "https://bot.pechenki.top/bot.php";  
  
$post_data = array (  
    "Ptoken" => "1249014125:AAG6TmozXRpLylxPYxLm-QUVSyNd2hApqtA", // вставить ваш ключ 
    "text" => $text,
);  
  
$ch = curl_init();  
  
curl_setopt($ch, CURLOPT_URL, $url);  
  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
curl_setopt($ch, CURLOPT_POST, 1);  
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);  
$output = curl_exec($ch);  
curl_close($ch);  

echo $success;


}
else{
	echo $text_error;
}




?>
</body>
</html>
