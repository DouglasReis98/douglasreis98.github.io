<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/modelo.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<link rel="stylesheet" type="text/css" href="style2.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Douglas Reis</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<div id="partecima">
<div id="divdomenu">
<div id="head">
<div class="logo">
<a href="index.php">
<img src="imagens/logo.png" alt="Douglas Reis" width="50" height="40">
</a>
</div>
<div id="menu"> 
  <ul>
<li><a href="sobre.php">SOBRE</a></li>
<li><a href="servicos.php">SERVIÇOS</a></li>
<li><a href="portfolio.php">PORTFÓLIO</a></li>
<li><a href="https://www.youtube.com/channel/UCpXG4JXU-hjQusxdhSYpyLg">YOUTUBE</a></li>
<li><a href="contato.php">CONTATO</a></li>
</ul>
</div>
</div>
</div>
<div id="divconteudo">
<div id="conteudo"><!-- InstanceBeginEditable name="Conteúdo" -->
<?php
	if(!empty($_POST)){
	
	$cab= "Form: ".$_POST['nome']. "<".$_POST['email'].">\n";
	
	$mensage = "Douglas Reis\n";
	$mensage = "Nome: ".$_POST['nome']."\n";
	$mensage.= "Email: ".$_POST['email']."\n";
	$mensage.= "Mensagem: ".$_POST['mensagem'];
	
	if(mail("douglas-reis@hotmail.com", "Formulário de Contato", $mensage, $cab)){
		echo "<script type=\"text/javascript\">alert(\"Sua mensagem foi enviada com sucesso.\"); history.go(-1); </script>\n";

	}
	else{ 
		echo"<script type=\"text/javascript\">alert(\"Ocorreu um erro ao tentar enviar a mensagem.\"); history.go(-1); </script>\n";
	}
}
	else{
	header("Location:index.php");	
	}
?>
<!-- InstanceEndEditable --></div>
</div>
<div id="redes">
<div id="botoes">
<div class="left">
<a href="https://www.facebook.com/douglasreis00">
<img src="imagens/social_media/facebook/normal.png" width="50" height="50" >
</a>
<a href="https://twitter.com/douglas_reis98">
<img src="imagens/social_media/twitter/normal.png" width="50" height="50" >
</a>
<a href="http://instagram.com/douglasreis00">
<img src="imagens/social_media/instagram/normal.png" width="50" height="50" >
</a>
<a href="https://www.linkedin.com/pub/douglas-reis/">
<img src="imagens/social_media/linkedin/normal.png" width="50" height="50" >
</a>
</div>
</div>
</div>

</body>
<!-- InstanceEnd --></html>