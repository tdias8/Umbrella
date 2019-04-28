<?PHP
// Coloque a mensagem que irá ser enviada para seu e-mail abaixo: 
$mensagem = $_POST['mensagem'];
$email= $_POST['email'];
$nome= $_POST['nome'];


 
//Este loop coloca todos os campos do formulário na mensagem do e-mail a ser enviado 
//while(list($campo, $valor) = each($HTTP_POST_VARS)) { 
//$mensagem .= ucwords($campo).": ".$valor."\n";
//} 
 
// Agora iremos fazer com que o PHP envie os dados do formulário para seu e-mail: 
mail("tdias8@hotmail.com", "Contato Umbrella","$email, $nome,$mensagem","From: $email"); 
 
echo "Seu e-mail foi enviado com sucesso. Obrigado"; 
?>