<?php
if (isset($_POST['form_name']) && !empty($_POST['form_name'])) {
  $form_name = 'Имя: ' . $_POST['form_name'] . "\n";
}
if (isset($_POST['form_phone']) && !empty($_POST['form_phone'])) {
  $form_phone = 'Телефон: ' . $_POST['form_phone'] . "\n";
}

$to = 'info@urily.ru';
$subject = 'Заполнена форма на сайте | Urily';
$message = $form_name . $form_phone;

$headers = 'From: info@urily.ru' . "\r\n" .
  'Reply-To: info@urily.ru' . "\r\n" .
  'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);


?>
