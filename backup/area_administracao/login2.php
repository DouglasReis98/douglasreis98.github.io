<?
ob_start();
?>
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
<div id="conteudo"><!-- InstanceBeginEditable name="Conteúdo" -->
<?
	$login_digitado=$_POST["login_digitado"];
	$senha_digitada=$_POST["senha_digitada"];

include("conect_db.php");

$busca=mysql_query ("Select login, senha from administracao where login='$login_digitado'")
or die ("<h1> Não foi possível realizar as buscas !!!</h1><br><br>".mysql_error());

while  ($reg=mysql_fetch_assoc($busca))
       {
       $login_db= $reg["login"];
       $senha_db= $reg["senha"];
       }
	   
	   if ($login_digitado== "" || $senha_digitada== "")
		{
		echo "<br><br><center><h2>Os campos de Login e Senha não podem ficar em branco !!!</h2></center>";
		echo "<br><center><a href=\"login.php\"> Clique aqui para tentar novamente !!!!</a>";
		}
		
		else

	if ($login_db==$login_digitado && $senha_db==$senha_digitada)
		{
		header("location:index.php");
		}
		
else
	{
	echo "<br><br><br><br><center><h2> O Login não pode ser realizado,
	<br><br> login inexistente ou senha incorreta</h2></center>" ;
	echo "<br><br><center><a href=\"login.php\">Clique aqui e Tente Novamente</a>";
		}
	
mysql_free_result($busca);
mysql_close($link);
?>
</center>

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