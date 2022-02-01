<?php
//require 'db/pessoa_db.php';
require 'classes/Projeto.php';

try{
if (!empty($_GET['action']) AND $_GET['action'] == 'delete') {
	$id = (int) $_GET['id'];
	Projeto::delete($id);
	//exclui_pessoa($id);
}

$projetos = Projeto::all();

}

catch (Exception $e) {
	print $e->getMessage();
}


$items = '';
//if ($pessoas) {
	foreach ($projetos as $projeto) {
		$item = file_get_contents('html/item.html');
		$item = str_replace('{id}',        $projeto['id'],       $item);
		$item = str_replace('{nome}',      $projeto['nome'],     $item);
		$item = str_replace('{descricao}', $projeto['descricao'], $item);
		$item = str_replace('{cliente}',   $projeto['cliente'],   $item);
		$item = str_replace('{ano}', 	   $projeto['ano'], $item);
		$item = str_replace('{url}', 	   $projeto['url'], $item);
		$items.= $item;
	}	
//}

$list = file_get_contents('html/list.html');
$list = str_replace('{items}', $items, $list);
print $list;
?>