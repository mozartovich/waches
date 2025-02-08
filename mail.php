<?php
	$to = "kievinvestigator@gmail.com";
	if ( isset($_POST['name']) && isset($_POST['email']) ) {
		/*$headers = 'From:name@bavcrm.pp.ua';*/
		$headers = "Content-type: text/plain; charset=utf-8 \r\n";
		$headers .= "From: name@bavcrm.pp.ua <no-reply@bavcrm.pp.ua>";
		$message = "Заявка с сайта:".$_SERVER['SERVER_NAME']."\r\nИмя: ".$_POST['name']."\r\nТелефон: ".$_POST['tel']."\r\nEmail: ".$_POST['email']."\r\n";
		mail($to,"Заявка с сайта:".$_SERVER['SERVER_NAME'], $message, $headers);
		echo true;
	}else{
		echo false;
	}
?>