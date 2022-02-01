<?php
require_once 'classes/Projeto.php';

class ProjetoForm{
	private $html;
	private $data;

	public function __construct(){
		$this->html = file_get_contents('html/formulario.html');
		$this->data = ['id' 	   => null,
					   'nome'	   => null,
					   'descricao'  => null,
					   'cliente'	   => null,
					   'ano'  => null,
					   'url'	   => null];
	}
	public function edit($param) {
		try {
			$id 	= (int) $param['id'];
			$projeto = Projeto::find($id);
			$this->data = $projeto;
	}
	catch (Exception $e){
		print $e->getMessage();
		}
	}

	public function save($param){
		try {
			Projeto::save($param);
			$this->data = $param;
			print "Projeto salva com sucesso";
		}
		catch (Exception $e){
			print $e->getMessage();
		}
	}

	public function show(){
		$this->html = str_replace('{id}', 		 $this->data['id'],		   $this->html);
		$this->html = str_replace('{nome}', 	 $this->data['nome'],	   $this->html);
		$this->html = str_replace('{descricao}', $this->data['descricao'], $this->html);
		$this->html = str_replace('{cliente}', 	 $this->data['cliente'],   $this->html);
		$this->html = str_replace('{ano}',	 	 $this->data['ano'], 	   $this->html);
		$this->html = str_replace('{url}', 	 	 $this->data['url'],	   $this->html);

		print $this->html;
	}
}


?>