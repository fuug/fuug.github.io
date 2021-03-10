<?php

/* https://api.telegram.org/bot1639592793:AAHfPR_ovPQhoeT03ZjlQL-5cDsajyWs-VI/getUpdates */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
// $email = $_POST['user_email'];
$date = $_POST['user_date'];

$token = "1639592793:AAHfPR_ovPQhoeT03ZjlQL-5cDsajyWs-VI";
$chat_id = "-546650204";
$arr = array(
  'Имя: ' => $name,
  'Телефон: ' => $phone,
  // 'Email' => $email,
  'Дата прибытия:' => $date
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: index.html');
} else {
  echo "Error";
}
?>


