<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lista de Projetos</title>
	<link rel="stylesheet" type="text/css" href="css/style-proj.css">
</head>
<body>
<?php
$dsn = "host=localhost port=**** dbname=projeto user=postgres password=";
$conn = pg_connect($dsn);

if (!empty($_GET['action']) AND $_GET['action'] == 'delete') {
	$id = (int) $_GET['id'];
	$result = pg_query($conn, "DELETE ROM portfolio WHERE id='{$id}'");
}

?>
</body>
</html>