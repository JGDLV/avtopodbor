<?

$to='greencar72@mail.ru';

if (isset($_POST['act'])) {

	$hdr="From: noreply@avtopodbor\nMIME-Version: 1.0\nContent-Type:text/plain;charset=\"utf-8\"";

	if ($_POST['act']=='callback') {
		$name = isset($_POST['name']) ? strip_tags($_POST['name']) : '';
		$phone = isset($_POST['phone']) ? strip_tags($_POST['phone']) : '';
		$message .= "Имя: $name\n";
		$message .= "Телефон: $phone\n";
		$subject = "Обратный звонок";
	} else if ($_POST['act']=='inspection') {
		$phone = isset($_POST['phone']) ? strip_tags($_POST['phone']) : '';
		$message .= "Телефон: $phone\n";
		$subject = "Осмотр на подъемнике";
	} else if ($_POST['act']=='check') {
		$vin = isset($_POST['vin']) ? strip_tags($_POST['vin']) : '';
		$url = isset($_POST['url']) ? strip_tags($_POST['url']) : '';
		$phone = isset($_POST['phone']) ? strip_tags($_POST['phone']) : '';
		$message .= "Имя: $vin\n";
		$message .= "Ссылка: $url\n";
		$message .= "Телефон: $phone\n";
		$subject = "Проверка VIN";
	}

	if (mail($to, "=?utf-8?B?".base64_encode($subject)."?=", $message, $hdr)) {
		print_r('<h2>Спасибо за обращение!</h2><p>Перезвоним в течении 15 минут в рабочее время</p>');
	}
	else {
		print_r('<h2>Ошибка, ваше сообщение не отправлено.</h2><p>Попробуйте отправить данные еще раз.</p>');
	}

}

?>
