﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<script src="area_administracao/editor_texto/ckeditor/jquery.min.js"></script>
<script src="area_administracao/editor_texto/ckeditor/ckeditor.js"></script>
<script src="area_administracao/editor_texto/ckeditor/adapters/jquery.js"></script>
<script>
$( document ).ready( function() {
	$( 'textarea#ckeditor' ).ckeditor();
} );
</script>
<h1>Contato</h1>
<div id="tabela">
  <form action="enviarcontato.php" method="post" name="form1" id="form1">
    <table align="center">
      <tr valign="baseline">
        <td align="right" valign="top" nowrap="nowrap">Nome:</td>
        <td valign="top"><input type="text" name="nome" id="nome" value="" size="100" /></td>
      </tr>
      <tr valign="baseline">
        <td align="right" valign="top" nowrap="nowrap">Email:</td>
        <td valign="top"><input type="text" name="email" id="email" value="" size="100" /></td>
      </tr>
      <tr valign="baseline">
        <td align="right" valign="top" nowrap="nowrap">Mensagem:</td>
        <td valign="top"><textarea id="ckeditor" name="mensagem" cols="100" rows="20"></textarea></td>
      </tr>
      <tr valign="baseline">
        <td align="right" valign="top" nowrap="nowrap">&nbsp;</td>
        <td valign="top"><input type="submit" value="Enviar" /></td>
      </tr>
    </table>
    <input type="hidden" name="MM_insert" value="enviar_mensagem" />
  </form>
  <p>&nbsp;</p>
</div>
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