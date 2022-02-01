<?php
require_once 'classes/Projeto.php';

class ProjetoList {
	private $html;

	public function __construct(){
		$this->html = file_get_contents('html/lista-projetos.html');
	}

	public function delete($param){
		try{
			$id = (int) $param['id'];
			Projeto::delete($id);
		}
		catch (Exception $e){
			print $e->getMessage();
		}
	}

	public function load() {
		try{
			$projetos = Projeto::all();
			$items = '';
			foreach ($projetos as $projeto){
				$item = file_get_contents('html/item.html');
				$item = str_replace('{id}',		   $projeto['id'], 		  $item);
				$item = str_replace('{nome}',	   $projeto['nome'],	  $item);
				$item = str_replace('{descricao}', $projeto['descricao'], $item);
				$item = str_replace('{cliente}',   $projeto['cliente'],   $item);
				$item = str_replace('{ano}', 	   $projeto['ano'], 	  $item);
				$item = str_replace('{url}', 	   $projeto['url'],		  $item);
				$items.= $item;
			}
			$this->html = str_replace('{items}', $items, $this->html);
		}
		catch (Exception $e) {
			print $e->getMessage();
		}
	}
	public function show(){
		$this->load();
		print $this->html;
	}
}
?>