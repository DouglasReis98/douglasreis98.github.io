<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>
<?
	$link=mysql_connect("mysql6.000webhost.com", "a4007835_port", "enviarport98")
	or die ("<h2>Não foi possível conectar!!!</h2>".mysql_error());
	
	$link=mysql_select_db("a4007835_portfo", $link)
	or die ("<h2>Erro ao abrir banco de dados !!!<h2><br><br>".mysql_error());
?>

<body>
</body>
</html>