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

$colname_porfolio_exibir = "-1";
if (isset($_GET['id'])) {
  $colname_porfolio_exibir = $_GET['id'];
}
mysql_select_db($database_portfolio, $portfolio);
$query_porfolio_exibir = sprintf("SELECT * FROM portfolio WHERE id = %s", GetSQLValueString($colname_porfolio_exibir, "int"));
$porfolio_exibir = mysql_query($query_porfolio_exibir, $portfolio) or die(mysql_error());
$row_porfolio_exibir = mysql_fetch_assoc($porfolio_exibir);
$totalRows_porfolio_exibir = mysql_num_rows($porfolio_exibir);
?>
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
<h1><?php echo $row_porfolio_exibir['titulo']; ?></h1>
<script type="text/javascript" src="lightbox/jquery-1.11.3.min.js"></script>
    <script type="text/javascript">
	$(document).ready(function() {
        $('.lightbox').click(function(){
			$('.janela, .box').animate({'opacity':'.60'}, 500, 'linear');
			$('.box').animate({'opacity':'1.00'}, 500, 'linear');
			$('.janela, .box').css('display', 'block');
		});
		$('.close').click(function(){
			$('.janela, .box').animate({'opacity':'0'}, 500, 'linear', function(){
				$('.janela, .box').css('display', 'none');
    });
	});
	
		$('.janela').click(function(){
			$('.janela, .box').animate({'opacity':'0'}, 500, 'linear', function(){
				$('.janela, .box').css('display', 'none');
    });
	});
	});
	</script>
    <style type="text/css">
	.janela{
	position:absolute;
	top:0;
	left:0;
	width:100%;
	height:100%;
	background-color:#000;
	opacity.:0;
	-moz-opacity:0;
	filter:alpha(opacity=0);
	z-index:100;
	display:none;
	}
	.box{
		position:absolute;
		top:20%;
		left:30%;
		width:640px;
		height:400px;
		background-color:#FFF;
		z-index:101;
		padding:14px;
		border-radius:4px;
		-moz-border-radius:4px;
		-webkit-border-radius:4px;
		box-shadow:2px 2px 2px #333;
		-moz-box-shadow:2px 2px 2px #333;
		-webkit-box-shadow:2px 2px 2px #333;
		display:none;
	}
	.close{
		float:right;
		margin-right:5px;
		cursor:pointer;
	}
	
	</style>
<div class="desc">
<a href="#" class="lightbox"><img src="imagens/portfolio/<?php echo $row_porfolio_exibir['imagem']; ?>" width="640" height="380" style="float:right; margin:0 0 100px 100px"></a>
<div class="titulo">
<p>&nbsp;</p>
</div>
<p>Categoria:<?php echo $row_porfolio_exibir['categoria']; ?></p>
<p>Data:<?php echo date('d/m/Y', strtotime($row_porfolio_exibir['data'])); ?></p>
<p><?php echo $row_porfolio_exibir['descricao']; ?></p>
<p><?php echo $row_porfolio_exibir['complemento1']; ?></p>
<p><?php echo $row_porfolio_exibir['complemento2']; ?></p>
</div>
<div class="clear"></div>
  <div class="janela"></div>
    <div class="box">
      <div class="close">X</div>
      <img src="imagens/portfolio/<?php echo $row_porfolio_exibir['imagem']; ?>" width="620" height="400" /></div>
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
mysql_free_result($porfolio_exibir);
?>
