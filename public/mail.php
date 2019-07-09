<?
	if(isset ($_POST['title'])) {$title=$_POST['title'];}
	if(isset ($_POST['name'])) {$name=$_POST['name'];}
	if(isset ($_POST['phone'])) {$phonenum=$_POST['phone'];}
	if(isset ($_POST['work'])) {$work=$_POST['work'];}
	if(isset ($_POST['parts'])) {$parts=$_POST['parts'];}
	if(isset ($_POST['service'])) {$service=$_POST['service'];}
	if(isset ($_POST['date'])) {$date=$_POST['date'];}
	if(isset ($_POST['part'])) {$part=$_POST['part'];}

	$to = "service1@skoda-kremen.com.ua"; // Замениь на емаил клиента

	$message = "Форма: $title <br><br>";
	if ( $name || $phonenum || $work || $parts || $service || $date || $part) {
		$message .= ""
			. ( $name ? "Имя:  $name <br>" : "")
			. ( $phonenum ? "Телефон:  $phonenum <br>" : "")
			. ( $work  ? "Что нужно сделать?: $work <br>" : "")
			. ( $parts  ? "Какие запчасти нужны?: $parts <br>" : "")
			. ( $service  ? "Услуга: $service <br>" : "")
			. ( $date  ? "Дата и время: $date <br>" : "")
			. ( $part  ? "Что нужно купить: $part <br>" : "");
	}

	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=UTF-8\r\n";
	$headers .= "From: no-reply@skodakremen.com.ua"; // Заменить домен на домен клиента

	if (!$title && !$phonenum) {
	} else {
		mail($to,"New lead(skodakremen.com.ua)",$message,$headers); // Заменить домен на домен клиента
	}
?>