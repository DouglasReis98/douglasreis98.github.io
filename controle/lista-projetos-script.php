<?php
//require 'db/pessoa_db.php';
require 'classes/Projetos.php';

try{
if (!empty($_GET['action']) AND $_GET['action'] == 'delete') {
	$id = (int) $_GET['id'];
	Pessoa::delete($id);
	//exclui_pessoa($id);
}

$pessoas = Pessoa::all();

}

catch (Exception $e) {
	print $e->getMessage();
}


$items = '';
//if ($pessoas) {
	foreach ($pessoas as $pessoa) {
		$item = file_get_contents('html/item.html');
		$item = str_replace('{$id}'       $row['id'],       $item);
		$item = str_replace('{$nome}'     $row['nome'],     $item);
		$item = str_replace('{$endereco}' $row['endereco'], $item);
		$item = str_replace('{$bairro}'   $row['bairro'],   $item);
		$item = str_replace('{$telefone}' $row['telefone'], $item);
		$items = $item;
	}	
//}

$list = file_get_contents('html/list.html');
$list = str_replace('{items}', $items, $list);
print $list;
?>