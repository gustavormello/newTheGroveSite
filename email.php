<?php
 $val= $_POST['val'];
 $toemail='contato@thegrove.com.br'; // enter your email id here
 
$name = $val['name'];
 $email = $val['email'];
 $website = $val['website'];
 $category = $val['cate'];
 $msg = $val['msg'];
 
 
 $subject = 'Contato realizado com The Grove - Academia de Idiomas';

$headers = "From: contato@thegrove.com.br \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";



$message = "<b>Name :</b>".$name."<br>";
$message .='<b>Email :</b>'.$email."<br>";
$message .='<b>Website :</b>'.$website."<br>";
$message .='<b>Category :</b>'.$category."<br>";
$message .='<b>Message :</b>'.$msg;


mail($toemail, $subject, $message, $headers);
 
 
 
 echo "Obrigado por entrar em contato conosco!";
	
?>