<?php

/* https://api.telegram.org/bot6254303247:AAFpmYDTnvJlwFz4CyAKGIhMkeegleq_kNU/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['name'];
$phone = $_POST['mobile'];
$token = "6254303247:AAFpmYDTnvJlwFz4CyAKGIhMkeegleq_kNU";
$chat_id = "-678853441";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: index.php');
} else {
  echo "Error";
}
?>