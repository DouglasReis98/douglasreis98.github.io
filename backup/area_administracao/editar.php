<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/modelo.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<link rel="stylesheet" type="text/css" href="../style2.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Douglas Reis</title>
<script src="editor_texto/ckeditor/jquery.min.js"></script>
<script src="editor_texto/ckeditor/ckeditor.js"></script>
<script src="editor_texto/ckeditor/adapters/jquery.js"></script>

<script>
$( document ).ready( function() {
	$( 'textarea#ckeditor' ).ckeditor();
} );
</script>
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
<h1>Editar Projeto</h1>
<?php
$id = $_GET['id'];

include ("conect_db.php");

$busca=mysql_query ("Select * FROM portfolio where id='$id'")
or die("<center><br><br><Br><br><b><h2>Erro ao tentar identificar criação!!!</h2></b></center>");
while ($reg=mysql_fetch_assoc($busca))
{
?>
<form action="editar2.php?id=<? echo $reg['id'];?>" method="post" name="form2" id="form2">
  <table align="center">
    <tr valign="baseline">
      <td align="right" valign="middle" nowrap="nowrap">Título:</td>
      <td align="left" valign="middle"><input type="text" name="titulo" value="<? echo $reg['titulo'];?>" size="50" /></td>
    </tr>
    <tr valign="baseline">
      <td align="right" valign="middle" nowrap="nowrap">Imagem:</td>
      <td align="left" valign="middle"><input type="file" name="imagem" value="<? echo $reg['imagem'];?>" id="imagem" /></td>
    </tr>
    <tr valign="baseline">
      <td align="right" valign="middle" nowrap="nowrap">Categoria:</td>
      <td align="left" valign="middle"><select name="categoria2" value="<? echo $reg['categoria'];?>">
        <option value="">... 
          </option>
        <option value="<? echo $reg['categoria'];?>">Imagem
          </option>
          <option value="<? echo $reg['categoria'];?>">Site
          </option>
          <option value="<? echo $reg['categoria'];?>">Vídeo
          </option>
      </select></td>
    </tr>
    <tr valign="baseline">
      <td align="right" valign="middle" nowrap="nowrap">Data:</td>
      <td align="left" valign="middle"><input type="text" name="data" value="<? echo date('Y/m/d', strtotime($reg['data']));?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td align="right" valign="middle" nowrap="nowrap">Descrição:</td>
      <td align="left" valign="middle"><textarea id="ckeditor" name="descricao" value="<? echo $reg['descricao'];?>" cols="50" rows="40"></textarea>
      
      </td>
    </tr>
    <tr valign="baseline">
      <td align="right" valign="middle" nowrap="nowrap">Complemento1:</td>
      <td align="left" valign="middle"><textarea id="ckeditor" name="complemento1" value="<? echo $reg['complemento1'];?>" cols="50" rows="30"></textarea></td>
    </tr>
    <tr valign="baseline">
      <td align="right" valign="middle" nowrap="nowrap">Complemento2:</td>
      <td align="left" valign="middle"><textarea id="ckeditor" name="complemento2" value="<? echo $reg['complemento2'];?>" cols="50" rows="40"></textarea></td>
    </tr>
    <?
}
	?>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Atualizar" /></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form2" />
</form>
<p>&nbsp;</p>
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
