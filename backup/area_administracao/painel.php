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
	color: #900;
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
<?
include("conect_db.php");

$busca=mysql_query ("Select * from portfolio order by id")
or die ("<center><br><br><Br><Br><Br><b><h2>Erro ao realizar busca!!!</h2></b></center>");
?>

<?
while ($reg=mysql_fetch_assoc($busca))
{
echo "<hr>";
echo "<br>ID: "    .$reg["id"];
echo "<br>Nome: "    .$reg["nome"];
echo "<br>Imagem: "    .$reg["imagem"];
echo "<br>Categoria: "    .$reg["categoria"];
echo "<br>Data: "    .$reg["data"];
echo "<br>Descrição: "    .$reg["descricao"];
echo "<br>Complemento1: "    .$reg["complemento1"];
echo "<br>Complemento2: "    .$reg["complemento2"];
}

mysql_free_result($busca);
mysql_close ($link);
?>

<h1>GERENCIAR PORTFÓLIO</h1>
    <table border="1" align="center">
      <tr>
        <td>id</td>
        <td>título</td>
        <td>imagem</td>
        <td>categoria</td>
        <td>data</td>
        <td>descricao</td>
        <td>complemento1</td>
        <td>complemento2</td>
        <td>OPÇÕES</td>
        <td bgcolor="#000000"><a href="postar.php">Postar Novo</a></td>
      </tr>
        <tr>
          <td rowspan="2"></td>
          <td rowspan="2"></td>
          <td rowspan="2"><img src="../imagens/portfolio/ " width="400" height="240" />
          </td>
          <td rowspan="2"></td>
          <td rowspan="2"> </td>
          <td rowspan="2"></td>
          <td rowspan="2"></td>
          <td rowspan="2"></td>
          <td colspan="2" bgcolor="#000000"><a href="editar.php?id=">Editar</a></td>
        </tr>
        <tr>
          <td colspan="2" bgcolor="#000000"><a href="excluir.php?id=">Excluir</a></td>
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
