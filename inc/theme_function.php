<?php
//ajax send form
add_action( 'wp_ajax_contactForm', 'contact_form' );
add_action( 'wp_ajax_nopriv_contactForm', 'contact_form');
function contact_form(){
	$email = trim(strip_tags($_POST['contact_email']));
	$message = '<h3 style="margin: 0; padding: 0; font-size: 18px; font-weight: 700">Дані повідомлення:</h3>'.'<br/>';
	$message .= '<span style="margin: 0; padding: 0; font-size: 14px; font-weight: 700; color: #896052">Ім`я: </span>'.'<strong>'.trim(strip_tags($_POST['contact_name'])).'</strong>'.'<br/>';
	$message .= '<span style="margin: 0; padding: 0; font-size: 14px; font-weight: 700; color: #896052">Телефон: </span>'.'<strong>'.'<a href="tel:'.trim(strip_tags($_POST['contact_phone'])).'">'.trim(strip_tags($_POST['contact_phone'])).'</a>'.'</strong>'.'<br/>';
	$message .= '<span style="margin: 0; padding: 0; font-size: 14px; font-weight: 700; color: #896052">Email адреса: </span>'.'<strong>'.trim(strip_tags($_POST['contact_email'])).'</strong>'.'<br/>';
	$message .= '<span style="margin: 0; padding: 0; font-size: 14px; font-weight: 700; color: #896052">Текст повідомлення: </span>'.'<strong>'.trim(strip_tags($_POST['contact_message'])).'</strong>'.'<br/>';
	
	$subject = "=?utf-8?B?".base64_encode("Повідомлення із магазину flower.if.ua")."?=";
	$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n"."X-Mailer: PHP/".phpversion();
	
	$success = mail("loren.decor@ukr.net", $subject, $message, $headers);
	echo "Дякуємо за Ваше звернення!";
	wp_die();
}
//ajax chart form
add_action( 'wp_ajax_sendCart', 'cart_form' );
add_action( 'wp_ajax_nopriv_sendCart', 'cart_form');
function cart_form(){
	$email = trim(strip_tags($_POST['email']));
	$message = '<h3 style="margin: 0; padding: 0; font-size: 18px; font-weight: 700">Дані повідомлення:</h3>'.'<br/>';
	$message .= '<span style="margin: 0; padding: 0; font-size: 14px; font-weight: 700; color: #896052">Ім`я: </span>'.'<strong>'.trim(strip_tags($_POST['name'])).'</strong>'.'<br/>';
	$message .= '<span style="margin: 0; padding: 0; font-size: 14px; font-weight: 700; color: #896052">Телефон: </span>'.'<strong>'.'<a href="tel:'.trim(strip_tags($_POST['phone'])).'">'.trim(strip_tags($_POST['phone'])).'</a>'.'</strong>'.'<br/>';
	$message .= '<span style="margin: 0; padding: 0; font-size: 14px; font-weight: 700; color: #896052">Email адреса: </span>'.'<strong>'.trim(strip_tags($_POST['email'])).'</strong>'.'<br/>';
	$message .= '<span style="margin: 0; padding: 0; font-size: 14px; font-weight: 700; color: #896052">Текст повідомлення: </span>'.'<strong>'.trim(strip_tags($_POST['message'])).'</strong>'.'<br/>';
	$message .= '<span style="margin: 0; padding: 0; font-size: 14px; font-weight: 700; color: #896052">Назва замовлення: </span>'.'<strong>'.trim(strip_tags($_POST['titleFlowers'])).'</strong>'.'<br/>';
	$message .= '<span style="margin: 0; padding: 0; font-size: 14px; font-weight: 700; color: #896052">Опис замовлення: </span>'.'<strong>'.trim(strip_tags($_POST['descriptionFlowers'])).'</strong>'.'<br/>';
	$message .= '<span style="margin: 0; padding: 0; font-size: 14px; font-weight: 700; color: #896052">Ціна замовлення: </span>'.'<strong>'.trim(strip_tags($_POST['priceFlowers'])).'</strong>'.'<br/>';

	$subject = "=?utf-8?B?".base64_encode("Повідомлення із магазину flower.if.ua")."?=";
	$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n"."X-Mailer: PHP/".phpversion();
	
	$success = mail("loren.decor@ukr.net", $subject, $message, $headers);
	echo "Дякуємо за Ваше замовлення! Очікуйте на дзвінок менеджера";
	wp_die();
}

//optimize img
add_filter( 'jpeg_quality', 'optimizer' );
function optimizer( $quality ){
	return 90;
}
?>