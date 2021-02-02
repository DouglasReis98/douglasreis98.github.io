<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/modelo.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<link rel="stylesheet" type="text/css" href="../style2.css">
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
<a href="../index.php">
<img src="../imagens/logo.png" alt="Douglas Reis" width="50" height="40">
</a>
</div>
<div id="menu"> 
  <ul>
<li><a href="../sobre.php">SOBRE</a></li>
<li><a href="../servicos.php">SERVIÇOS</a></li>
<li><a href="../portfolio.php">PORTFÓLIO</a></li>
<li><a href="https://www.youtube.com/channel/UCpXG4JXU-hjQusxdhSYpyLg">YOUTUBE</a></li>
<li><a href="../contato.php">CONTATO</a></li>
</ul>
</div>
</div>
</div>
<div id="divconteudo">
<div id="conteudo"><!-- InstanceBeginEditable name="Conteúdo" --><h2>Incluindo postagem no Banco de Dados</h2>
<?php
$titulo_digitado = $_POST['titulo'];
$imagem = $_POST['imagem'];
$categoria = $_POST['categoria'];
$data = $_POST['data'];
$descricao = $_POST['descricao'];
$complemento1 = $_POST['complemento1'];
$complemento2 = $_POST['complemento2'];

if  ($titulo_digitado == "" || $imagem == "" || $categoria == "" || $data == "" || $descricao == "" || $complemento1 == "" || $complemento2 == "")
{
	echo "Existe(m) campo(s) que você deixou em branco, <br> infelizmente você vai ter que voltar e preenchê-lo(s)!";
	echo "<br><a href=\"postar.php\"> Clique aqui para retornar e tentar novamente</a>";
}
else
{
	{
		$link=mysql_connect("mysql6.000webhost.com", "a4007835_port", "enviarport98")
		or die ("<h3> Não foi possível conectar !!!</h3> ".mysql_error());
		$banco=mysql_select_db("a4007835_portfo", $link)
		or die ("<h3> Erro ao abrir banco de dados !!!</h3>".mysql_error());
		$busca=mysql_query ("Select titulo from portfolio where titulo='$titulo_digitado'")
		or die ("<h3> Não foi possível realizar as buscas: </h3>".mysql_error());
		
		while ($reg=mysql_fetch_assoc($busca))
		($titulo_db= $reg["titulo"]);
	}

if ($titulo_db==$titulo_digitado)
{
	echo "<BR> O título pretendido é \"".$titulo_digitado. "\", mas, infelizmente este título já existe, por favor, tente outro título.";
	echo "<BR><BR><center><a href=\"postar.php\"> Clique aqui para tentar novamente<a/><br><br>";
	
	mysql_free_result($busca);
	$titulo_db="";
	mysql_close($link);
}
else
{
	mysql_free_result($busca);
	mysql_close($link);

$res1= mysql_connect("mysql6.000webhost.com", "a4007835_port", "enviarport98")
or die ("<h3>Não foi possível fazer a conexão para a inserção de dados </h3>".mysql_error());

if ($res1)
{
	$sql = "insert into portfolio"
	."(titulo, imagem, categoria, data, descricao, complemento1, complemento2)"
	." values ('$titulo_digitado', '$imagem', '$categoria', '$data', '$descricao', '$complemento1', '$complemento2')";
	$res2 = mysql_db_query ("a4007835_portfo", $sql, $res1);
}

if ($res2)
{
		echo "<BR>";
		echo "<h2>A criação foi postada com sucesso!!!</h2>";
		echo "<center><a href=\"index.php\">Clique aqui para voltar ao painel principal!!!</a>";
		echo "<br><br>";
		}
	
	else{
		echo ("<br><br><h3>Erro de conexão, não foi possível postar a criação</h3>".mysql_error());
		echo "<br><br><center><a href=\"index.php\">Clique aqui para voltar a tela inicial</a>";
		}
}
}
?>
<!-- InstanceEndEditable --></div>
</div>
<div id="redes">
<div id="botoes">
<div class="left">
<a href="https://www.facebook.com/douglasreis00">
<img src="../imagens/social_media/facebook/normal.png" width="50" height="50" >
</a>
<a href="https://twitter.com/douglas_reis98">
<img src="../imagens/social_media/twitter/normal.png" width="50" height="50" >
</a>
<a href="http://instagram.com/douglasreis00">
<img src="../imagens/social_media/instagram/normal.png" width="50" height="50" >
</a>
<a href="https://www.linkedin.com/pub/douglas-reis/">
<img src="../imagens/social_media/linkedin/normal.png" width="50" height="50" >
</a>
</div>
</div>
</div>

</body>
<!-- InstanceEnd --></html>