<?php

/* https://api.telegram.org/bot5064368512:AAECq7gEWBIyMYOVBOpUCFzTl7u7k211z8k/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['username'];
$email = $_POST['usertg'];
$token = "5064368512:AAECq7gEWBIyMYOVBOpUCFzTl7u7k211z8k";
$chat_id = "-1001785310476";
$arr = array(
  'Имя пользователя: ' => $name,
  'Telegram ID: ' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>