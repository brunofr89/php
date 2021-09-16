<?php
/******************************************************
 *  visitas.php - guarda no arquivo visitas.txt o host,                   *
 *  ip, data e hora de acesso do visitante ao site.                        *
 *                                                                                           *
 *  autor: Rodney Barreto     e-mail: rodney_qg@yahoo.com.br   *
 *  18/09/2004 - v. 1.0                                                             *
 ******************************************************/

$ip   = getenv(REMOTE_ADDR); //guarda o endereco ip do host
$host = gethostbyaddr($ip); //guarda o mome do host
$data = date("d/m/Y"); //formata data
$hora = date("H:i"); //formata hora

//escreve no arquivo visitas.txt o (host,ip,data,hora) de acesso
$arq = fopen("visitas.txt","a");
     fwrite($arq,"\n$host;$ip;$data;$hora");
fclose($arq);
?>
