<?php
//Variáveis

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');

$corpoMail = "Nome:".$nome."<br>";
$corpoMail.= "E-MAIL: ".$email."<br>";
$corpoMail.= "Mensagem: ".$mensagem;
//enviar
  
  // emails para quem será enviado o formulário
  $emailenviar = "tdias8@hotmail.com";
  $destino = $emailenviar;
  $assunto = "Contato Umbrella";

  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: Umbrella Corporation';
  //$headers .= "Bcc: $EmailPadrao\r\n";
  $enviaremail = mail($destino, $assunto, $corpoMail, $headers);
  if($enviaremail){
  	header ("Location:ok.php");
  } else {
  	header ("Location:erro.php");
  }
?>