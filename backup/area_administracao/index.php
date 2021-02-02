<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/modelo.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<link rel="stylesheet" type="text/css" href="../style2.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Douglas Reis</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<style type="text/css">
a:link {
	color: #FFF;
}
a:hover {
	color: #000;
}
a:active {
	color: #09F;
}
</style>
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
<h1>GERENCIAR PORTFÓLIO</h1>
<?
include("conect_db.php");

$busca=mysql_query ("Select * from portfolio order by id DESC")
or die ("<center><br><br><Br><Br><Br><b><h2>Erro ao realizar busca!!!</h2></b></center>");
$linha=mysql_fetch_assoc($busca);
?>
<a href="postar.php">Postar Novo</a>
<br>
<br>
<table border=1 cellpadding=10>
<tr class = titulo>
<td>ID</td>
<td>Título</td>
<td>Imagem</td>
<td>Categoria</td>
<td>Data</td>
<td>Descrição</td>
<td>Complemento1</td>
<td>Complemento2</td>
<td>Ação</td>
</tr>
<?php do {?>
<tr>
<td><?php echo $linha['id']; ?></td>
<td><?php echo $linha['titulo']; ?></td>
<td><?php echo $linha['imagem']; ?></td>
<td><?php echo $linha['categoria']; ?></td>
<td><?php echo date('d/m/Y', strtotime($linha['data'])); ?></td>
<td><?php echo $linha['descricao']; ?></td>
<td><?php echo $linha['complemento1']; ?></td>
<td><?php echo $linha['complemento2']; ?></td>
<td>
<a href="editar.php?id=<?php echo $linha['id']; ?>">Editar</a>
<br><br>
<a href="excluir.php?id=<?php echo $linha['id']; ?>">Excluir</a>
<?php } while($linha=mysql_fetch_assoc($busca)); ?>
</td>
</tr>
</table>


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
