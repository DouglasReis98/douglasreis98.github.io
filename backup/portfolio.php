<?php require_once('Connections/portfolio.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$maxRows_listar_portfolio = 10;
$pageNum_listar_portfolio = 0;
if (isset($_GET['pageNum_listar_portfolio'])) {
  $pageNum_listar_portfolio = $_GET['pageNum_listar_portfolio'];
}
$startRow_listar_portfolio = $pageNum_listar_portfolio * $maxRows_listar_portfolio;

mysql_select_db($database_portfolio, $portfolio);
$query_listar_portfolio = "SELECT * FROM portfolio ORDER BY id DESC";
$query_limit_listar_portfolio = sprintf("%s LIMIT %d, %d", $query_listar_portfolio, $startRow_listar_portfolio, $maxRows_listar_portfolio);
$listar_portfolio = mysql_query($query_limit_listar_portfolio, $portfolio) or die(mysql_error());
$row_listar_portfolio = mysql_fetch_assoc($listar_portfolio);

if (isset($_GET['totalRows_listar_portfolio'])) {
  $totalRows_listar_portfolio = $_GET['totalRows_listar_portfolio'];
} else {
  $all_listar_portfolio = mysql_query($query_listar_portfolio);
  $totalRows_listar_portfolio = mysql_num_rows($all_listar_portfolio);
}
$totalPages_listar_portfolio = ceil($totalRows_listar_portfolio/$maxRows_listar_portfolio)-1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/modelo.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<link rel="stylesheet" type="text/css" href="style2.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<link rel="stylesheet" type="text/css" href="portfolio.css">
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
<h1> Portfólio </h1>
<div class="imagem" id="portfolio">
  <?php do { ?>
    <table width="730" border="0">
      <tr>
        <td width="450" rowspan="3"><a href="portfolio_exibir.php?id=<?php echo $row_listar_portfolio['id']; ?>"> <img src="imagens/portfolio/<?php echo $row_listar_portfolio['imagem']; ?>" width="450" height="300" /></td>
        <td width="270" height="73"><?php echo $row_listar_portfolio['titulo']; ?></td>
        </tr>
      <tr>
        <td height="89">Categoria:<?php echo $row_listar_portfolio['categoria']; ?> </td>
        </tr>
      <tr>
        <td>Data: <?php echo date('d/m/Y', strtotime($row_listar_portfolio['data'])); ?></td>
        </tr>
    </table>
    <br /><BR />
    <?php } while ($row_listar_portfolio = mysql_fetch_assoc($listar_portfolio)); ?>

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
<?php
mysql_free_result($listar_portfolio);
?>
