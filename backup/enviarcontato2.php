<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Enviando contato...</title>
</head>
<body>
<?php
$to= "douglasamaralreis@outlook.com";
$nome= $_REQUEST['nome'];
$email= $_REQUEST['email'];
$assunto= $_REQUEST['assunto'];
$mensagem= $_REQUEST['mensagem'];

$corpo= "<strong>Mensagem de Contato</strong><br><br>";
$corpo .= "<br><strong>Nome:</strong> $nome";
$corpo .= "<br><strong>Email:</strong> $email";
$corpo .= "<br><strong>Assunto:</strong> $assunto";
$corpo .= "<br><strong>Mensagem:</strong> $mensagem";


$email_remetente = "$email";
$header = "MIME-Version: 1.1\n";
$header ="Content-Type: text/html; charset= utf-8\n";
$header .= "From: $email_remetente\n";
$header .="From: $email\n"; 
$header .= "Return-Path: $email_remetente\n";
$header .= "Reply-To: $email_usuario\n";
$enviar = mail("douglasamaralreis@outlook.com" ,$to, $assunto, $corpo, $header);

header("location:contato.php?msg=enviado");
 
?>
</body>
</html>