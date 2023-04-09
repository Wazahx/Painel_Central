<?php
error_reporting(0);


$token = 'APP_USR-2334132047763650-050400-b585d4328b6d40e766c9958f7f98fcb2-384466906';

function dados($string,$start,$end){        
  $str = explode($start, $string);
  $str = explode($end, $str[1]);
  return $str[0];
    
}

function extrair($string,$start,$end){
    $str = explode($start,$string);
    $str = explode($end,$str[1]);
    return $str[0];
}

function multiexplode($delimiters, $string) {
  $one = str_replace($delimiters, $delimiters[0], $string);
  $two = explode($delimiters[0], $one);
  return $two;
}

$lista = $_GET['lista'];
$separadores = array(",","|",":","'"," ","~",";","|","/");
$separar = multiexplode($separadores,$lista);
$cc = $separar[0];
$mes = $separar[1];
$ano = $separar[2];
$cvv = $separar[3];
$bin = substr($cc,0,6);


$re = array(
  "Visa" => "/^4[0-9]{12}(?:[0-9]{3})?$/",
  "Master" => "/^5[1-5]\d{14}$/",
  "Amex" => "/^3[47]\d{13,14}$/",
  "elo" => "/^((((636368)|(438935)|(509000)|(650487)|(650485)|(650507)|(650905)|(506730)|(504175)|(451416)|(636297))\d{0,10})|((5067)|(4576)|(4011))\d{0,12})$/",
  "hipercard" => "/^(606282\d{10}(\d{3})?)|(3841\d{15})$/",
);

if (preg_match($re['Visa'], $cc)) {
   $tipo = "visa";
} else if (preg_match($re['Amex'], $cc)) {
    $tipo = "amex";
} else if (preg_match($re['Master'], $cc)) {
   $tipo = "master";
} else if (preg_match($re['elo'], $cc)) {
   $tipo = "elo";
} else {
    echo "  Reprovada $cc|$mes|$ano|$cvv | Retorno: <font color='red'> Card not suported/font> </font> <br>";
}


if(strlen($ano)==2){$ano ="20$ano";}
  
$nome = ["Kai Lima Castro","Andre Rodrigues Costa","Renan Cavalcanti Barbosa","Thiago Fernandes Ribeiro","Igor Correia Martins","Renan Santos Correia","Diogo Almeida Alves","Matheus Silva Melo"];
    
$nome_pag = $nome[array_rand($nome)];  
$email = strtolower(str_replace(' ', '', $nome_pag)) . rand(00000,99999) . "@outlook.com";  
    
 
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.mercadopago.com/v1/card_tokens?access_token=$token",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_SSL_VERIFYPEER => false,
      CURLOPT_SSL_VERIFYHOST => false,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => '{"card_number":"'.$cc.'","expiration_month":'.$mes.',"expiration_year":'.$ano.',"security_code":"'.$cvv.'","cardholder":{"name":"MARIO DIAS"}}',
        CURLOPT_HTTPHEADER => array(
        "content-type: application/json"
      ),
    ));
    
     $r0 = curl_exec($curl);

       if(strpos($r0,'Malformed access_token:')){
           "Reprovada ➔ $cc|$mes|$ano|$cvv | Retorno: <font color='red'> Key Invalida </font> <br>" ;
           exit();
       }
        
      $id =dados($r0,'"id":"','"');
      
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.mercadopago.com/v1/payments?access_token=$token",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_SSL_VERIFYPEER => false,
      CURLOPT_SSL_VERIFYHOST => false,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => '{"token": "'.$id.'","transaction_amount": 1.00,"payment_method_id": "'.$tipo.'","payer": {"email": "'.$email.'"},"installments": 1,"capture":false}',
      CURLOPT_HTTPHEADER => array(
        "content-type: application/json"
      ),
    ));
     $r1 = curl_exec($curl);
    
     $msg = dados($r1,'rejected","status_detail":"','","currency_id":"BRL'); 

     if($msg ==""){
     $msg = '<font color="red">cartao invalido</font>';
     }else{
     $msg = '<span class="label label-primary">'.$msg.'</font>';
     }
    
    if (strpos($r1,'cc_rejected_high_risk')) {
     $msgts= " Reprovada $cc|$mes|$ano|$cvv | Retorno: <font color='red'> $msg </font> <br></font> <br>";

    } 

else if(strpos($r1,'pending_review_manual')){
      $fim = file_get_contents("https://bin.generator.creditcard/?a=$bin&s=s"); 
      $pais = dados($fim, '>Country:</label> </td><td><input type="text" value="', '"');
      $brand = dados($fim, 'Card Brand:</label> </td><td><input type="text" value="', '"');
      $banco = dados($fim, 'Bank Name:</label> </td><td><input type="text" value="', '"');
      $level = dados($fim, 'Card Level:</label> </td><td><input type="text" value="', '"');
      $tipo_da_bin = dados($fim, 'Card Type:</label> </td><td><input type="text" value="', '"');

      $msgts=  "Aprovada ➔ $cc|$mes|$ano|$cvv | Bandeira: $brand | Tipo: $tipo_da_bin | Nivel: $level | Banco: $banco | Pais: ($pais) | Retorno: pending_review_manual  </font> | @GalaxyCenter <br>";
debitar($valor_live);
    
    } else if(strpos($r1,"cc_rejected_insufficient_amount")){
        
        $fim = file_get_contents("https://bin.generator.creditcard/?a=$bin&s=s");
        $pais = dados($fim, '>Country:</label> </td><td><input type="text" value="', '"');
        $brand = dados($fim, 'Card Brand:</label> </td><td><input type="text" value="', '"');
        $banco = dados($fim, 'Bank Name:</label> </td><td><input type="text" value="', '"');
        $level = dados($fim, 'Card Level:</label> </td><td><input type="text" value="', '"');
        $tipo_da_bin = dados($fim, 'Card Type:</label> </td><td><input type="text" value="', '"');

        $msgts=  "Aprovada ➔ ➔ $cc|$mes|$ano|$cvv | Bandeira: $brand | Tipo: $tipo_da_bin | Nivel: $level | Banco: $banco Pais: ($pais) | Retorno:<font color='red'>  Sem saldo   </font></font> <br>";
        
         
    }else if(strpos($r1,"cc_rejected_bad_filled_security_code")){

        $fim = file_get_contents("https://bin.generator.creditcard/?a=$bin&s=s");
        $pais = dados($fim, '>Country:</label> </td><td><input type="text" value="', '"');
        $brand = dados($fim, 'Card Brand:</label> </td><td><input type="text" value="', '"');
        $banco = dados($fim, 'Bank Name:</label> </td><td><input type="text" value="', '"');
        $level = dados($fim, 'Card Level:</label> </td><td><input type="text" value="', '"');
        $tipo_da_bin = dados($fim, 'Card Type:</label> </td><td><input type="text" value="', '"');

        $msgts=  " Aprovada ➔ $cc|$mes|$ano|$cvv | Bandeira: $brand | Tipo: $tipo_da_bin | Nivel: $level | Banco: $banco | Pais: ($pais) |  Retorno: <font color='red'> CVV INCORRETO </font> <br> </font> <br>";
      debitar($valor_live); 
        
    } else if(strpos($r1,"pending_contingency")){

        $fim = file_get_contents("https://bin.generator.creditcard/?a=$bin&s=s");
        $pais = dados($fim, '>Country:</label> </td><td><input type="text" value="', '"');
        $brand = dados($fim, 'Card Brand:</label> </td><td><input type="text" value="', '"');
        $banco = dados($fim, 'Bank Name:</label> </td><td><input type="text" value="', '"');
        $level = dados($fim, 'Card Level:</label> </td><td><input type="text" value="', '"');
        $tipo_da_bin = dados($fim, 'Card Type:</label> </td><td><input type="text" value="', '"');

        $msgts=  "Aprovada ➔ $cc|$mes|$ano|$cvv |  Bandeira: $brand | Tipo: $tipo_da_bin | Nivel: $level | Banco: $banco | Pais: ($pais) | Retorno:  $msg   </font>| @GalaxyCenter <br>";
        debitar($valor_live); 
         
    }else if (strpos($r1,'cc_rejected_call_for_authorize')){
      $msgts=  "  ✘  Reprovada ➔ $cc|$mes|$ano|$cvv | Retorno: <font color='red'> Ligue para o banco, $msg</font> <br>";
   
    } else if(strpos($r1,'pending_capture')){

        $fim = file_get_contents("https://bin.generator.creditcard/?a=$bin&s=s");
        $pais = dados($fim, '>Country:</label> </td><td><input type="text" value="', '"');
        $brand = dados($fim, 'Card Brand:</label> </td><td><input type="text" value="', '"');
        $banco = dados($fim, 'Bank Name:</label> </td><td><input type="text" value="', '"');
        $level = dados($fim, 'Card Level:</label> </td><td><input type="text" value="', '"');
        $tipo_da_bin = dados($fim, 'Card Type:</label> </td><td><input type="text" value="', '"');

        $msgts =  " Aprovada ➔ $cc|$mes|$ano|$cvv | Bandeira: $brand | Tipo: $tipo_da_bin | Nivel: $level | Banco: $banco | Pais: ($pais) | Retorno:  Card Pre aprovado, $msg  </font> | @GalaxyCenter <br>";
        debitar($valor_live);
      
   
    }else if(strpos($r1,'cc_rejected_other_reason')){
       $msgts=  "✘  Reprovada ➔ $cc|$mes|$ano|$cvv | Retorno: <font color='red'> Erro desconheçido, $msg </font> <br></font> <br>" ;
    
    }
    else if(strpos($r1,'cc_rejected_bad_filled_card_number')){
       $msgts=  "✘  Reprovada ➔ $cc|$mes|$ano|$cvv | Retorno: <font color='red'> Card Invalido </font> <br></font> <br>";
    

    } else if(strpos($r1,"cc_rejected_blacklist")){
       $msgts=  "✘  Reprovada ➔ $cc|$mes|$ano|$cvv | Retorno: <font color='red'>Cartao bloqueado, $msg </font> <br> </font> <br>";
    

    } else if(strpos($r1,"cc_rejected_bad_filled_other")){
       $msgts=  "<span class='badge bagde-danger'> ✘ Reprovada ➔ </font>$cc|$mes|$ano|$cvv | Retorno: <font color='red'>Cartao mal preenchido, $msg </font> <br></font> <br>";
    
    } else{
      $msgts=  "✘  Reprovada ➔ $cc|$mes|$ano|$cvv | Retorno: <font color='red'> $msg </font> <br> </font> <br>";
    }

    echo $msgts;


?>
