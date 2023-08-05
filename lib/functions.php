<?php
	
	function pdo(){
		$db_host = db_host;
		$db_usuario = db_usuario;
		$db_senha = db_senha;
		$db_banco = db_banco;

		try {
			return $pdo = new PDO("mysql:host={$db_host}; dbname={$db_banco}", $db_usuario, $db_senha);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
			exit("Erro ao connectar-se ao banco.".$e->getMessage());
		}
	}

/*-------------------------------------------FUNÇÕES - ADM----------------------------------------------*/

	function paginacao_adm(){
		$url = (isset($_GET['pagina'])) ? $_GET['pagina'] : 'dashboard';
		$explode = explode('/', $url);
		$dir = 'pags/php/';
		$ext = '.php';

		if (file_exists($dir.$explode[0].$ext) && isset($_SESSION['admLogin'])) {
			include($dir.$explode[0].$ext);
		} else {
			include($dir."login".$ext);
		}
	}

	/*
	function alerta($tipo, $mensagem){
		echo "<div class='{$tipo}'>{$mensagem}</div>";
	}
	*/

	function redirecionar($tempo, $dir){
		echo "<meta http-equiv='refresh' content='{$tempo}; url={$dir}'>";
	}

	function logIn(){
		if (isset($_POST['log']) && $_POST['log'] == "in") {
			$pdo = pdo();

			$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE usuario = :usuario");
			$stmt->execute([':usuario' => $_POST['login']]);
			$total = $stmt->rowCount();

			if ($total > 0) {
				$dados = $stmt->fetch(PDO::FETCH_ASSOC);

				if (password_verify($_POST['senha'], $dados['senha'])) {
					$_SESSION['admLogin'] = $dados['usuario'];
					header('Location: dashboard');
				} else {
					echo "Usuário ou Senha Inválidos";
				}
			}
		}
	}

	function verificaLogin(){
		if (isset($_SESSION['admLogin'])) {
			header('Location: dashboard');
			exit();
		}
	}

	function getDadosUser($var){
		if(isset($_SESSION['admLogin'])){
			$pdo = pdo();
			$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE usuario = :usuario");
			$stmt->execute([':usuario' => $_SESSION['admLogin']]);

			$dados = $stmt->fetch(PDO::FETCH_ASSOC);
			return $dados[$var];
		}
	}

	function get_Categorias(){
		$pdo = pdo();

		$stmt = $pdo->prepare("SELECT * FROM categorias ORDER BY categoria ASC");
		$stmt->execute();
		$total = $stmt->rowCount();

		if ($total > 0) {
			while ($dados = $stmt->fetch(PDO::FETCH_ASSOC)) {
				echo "<option value='{$dados['id']}'>{$dados['categoria']}</option>";
			}
		} else {
				echo "Nenhuma categoria cadastrada! Cadastre uma categoria para prosseguir!";
				exit();
		}
	}

	function tirarAcentos($string){
	    return strtolower(str_replace(" ","-", preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/","/(Ç)/","/(#)/"),explode(" ","a A e E i I o O u U n N C  "),$string)));
	}

	function getData(){
		date_default_timezone_set('America/Bahia');
		return date('d/m/Y');
	}

	function enviarPost(){
		if (isset($_POST['env']) && $_POST['env'] == "post") {
			$pdo = pdo();
			$subtitulo = tirarAcentos($_POST['titulo']);
			$data = getData();

			$uploaddir = '../img/uploads/';
			$uploadfile = $uploaddir.basename($_FILES['userfile']['name']);

			$uploaddir2 = 'img/uploads/';
			$uploadfile2 = $uploaddir2.basename($_FILES['userfile']['name']);

			if ($_FILES['userfile']['size'] > 0) {
			$stmt = $pdo->prepare("INSERT INTO projetos (
				titulo,
				subtitulo,
				imagem,
				categoria,
				descricao,
				cliente,
				data,
				tags,
				url) VALUES (
				:titulo,
				:subtitulo,
				:imagem,
				:categoria,
				:descricao,
				:cliente,
				:data,
				:tags,
				:url
				)
				");
			$stmt->execute([
				':titulo' => $_POST['titulo'],
				':subtitulo' => $subtitulo,
				':imagem' => $uploadfile2,
				':categoria' => $_POST['categoria'],
				':descricao' => $_POST['descricao'],
				':cliente' => $_POST['cliente'],
				':data' => $data,
				':tags' => $_POST['tags'],
				':url' => $_POST['url']
				]);

				$total = $stmt->rowCount();

				if ($total > 0) {
					move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
						echo "Publicação enviada com sucesso!";
					} else {
						echo "Erro ao enviar publicação.";
					}
						

			} else {
				echo "Insira uma Imagem";
			}

			
		}
	}

	function getNomeCategoria($id){
		$pdo = pdo();

		$stmt = $pdo->prepare("SELECT categoria FROM categorias WHERE id = :id");

		$stmt->execute([':id' => $id]);
		$dados = $stmt->fetch(PDO::FETCH_ASSOC);
		return $dados['categoria'];
	}

	function getDadosProjeto($id, $val){
		$pdo = pdo();

		$stmt = $pdo->prepare("SELECT * FROM projetos WHERE id = :id");

		$stmt->execute([':id' => $id]);
		$dados = $stmt->fetch(PDO::FETCH_ASSOC);
		return $dados[$val];

	}

		function getCategoriaAtual($id){
		$pdo = pdo();

		$stmt = $pdo->prepare("SELECT * FROM categorias WHERE id = :id");

		$stmt->execute([':id' => $id]);
		$dados = $stmt->fetch(PDO::FETCH_ASSOC);
		echo "<option value='{$dados['id']}'>{$dados['categoria']}(Atual)</option> ";
	}

	function getPostsAdmin(){
		$pdo = pdo();

		$stmt = $pdo->prepare("SELECT * FROM projetos ORDER BY id DESC");
		$stmt->execute();
		$total = $stmt->rowCount();

		if ($total > 0):
			while ($dados = $stmt->fetch(PDO::FETCH_ASSOC)) {
				echo "<tr>
                <td>{$dados['id']}</td>
                <td>{$dados['titulo']}</td>
                <td><img src='{$dados['imagem']}' width='80px'></td>
                <td>".getNomeCategoria($dados['categoria'])."</td>
                <!--<td>{$dados['descricao']}</td>-->
                <td>{$dados['cliente']}</td>
                <td>{$dados['data']}</td>
                <td>{$dados['tags']}</td>
                <td>{$dados['url']}</td>
                <td><a href='area_adm/editar_projeto/{$dados['id']}'>editar</a></td>
                <td><a href='area_adm/excluir_projeto/{$dados['id']}'>excluir</a></td>
            </tr>";
	}
			endif;
	}

	function editarPost($id){
		if (isset($_POST['env']) && $_POST['env'] == "alt") {
			$pdo = pdo();
			$subtitulo = tirarAcentos($_POST['titulo']);

				if($_FILES['userfile']['size'] > 0){
				$uploaddir = '../img/uploads/';
				$uploadfile = $uploaddir.basename($_FILES['userfile']['name']);

				$uploaddir2 = 'img/uploads/';
				$uploadfile2 = $uploaddir2.basename($_FILES['userfile']['name']);

				$stmt = $pdo->prepare("UPDATE projetos SET
													titulo = :titulo,
													subtitulo = :subtitulo,
													categoria = :categoria,
													descricao = :descricao,
													cliente = :cliente,
													tags = :tags,
													url = :url,
													imagem = :imagem
													WHERE
													id = :id");

			$stmt->execute([':titulo' => $_POST['titulo'],
							':subtitulo' => $subtitulo,
							':categoria' => $_POST['categoria'],
							':descricao' => $_POST['descricao'],
							':cliente' => $_POST['cliente'],
							':tags' => $_POST['tags'],
							':url' => $_POST['url'],
							':imagem' => $uploadfile2,
							':id' => $id]);
			move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
			}else{
				$stmt = $pdo->prepare("UPDATE projetos SET
													titulo = :titulo,
													subtitulo = :subtitulo,
													categoria = :categoria,
													descricao = :descricao,
													cliente = :cliente,
													tags = :tags,
													url = :url
													WHERE
													id = :id");
			$stmt->execute([':titulo' => $_POST['titulo'],
							':subtitulo' => $subtitulo,
							':categoria' => $_POST['categoria'],
							':descricao' => $_POST['descricao'],
							':cliente' => $_POST['cliente'],
							':tags' => $_POST['tags'],
							':url' => $_POST['url'],
							':id' => $id]);
			}

			$total = $stmt->rowCount();

			if ($total > 0) {
				echo "Publicação alterada e salva";
				redirecionar(2, "area_adm/editar_projeto/{$id}");
			} else {
				echo "Erro ao alterar publicação";
			}
		}
	}

	function excluir($tabela, $coluna, $id, $backpage){
		$pdo = pdo();

		$stmt = $pdo->prepare("DELETE FROM ".$tabela." WHERE ".$coluna." = :id");
		$stmt->execute([':id' => $id]);
		$total = $stmt->rowCount();

		if ($total > 0) {
			redirecionar(0, $backpage);
		} else {
			echo "Erro ao deletar";
		}
		
	}

	function deletarImg($id_post){
		$pdo = pdo();

		$stmt = $pdo->prepare("SELECT imagem FROM projetos WHERE id = :id");
		$stmt->execute([':id' => $id_post]);
		$total = $stmt->rowCount();

		if ($total > 0) {
			$dados = $stmt->fetch(PDO::FETCH_ASSOC);
			unlink("../{$dados['imagem']}") or die ("Erro ao deletar imagem");
		}
	}

	function addCategoria(){
		if (isset($_POST['env']) && $_POST['env'] == "cat") {
			$pdo = pdo();

			$stmt = $pdo->prepare("INSERT INTO categorias (categoria) VALUES (:categoria)");
			$stmt->execute([':categoria' => $_POST['categoria']]);

			$total = $stmt->rowCount();

			if ($total > 0) {
				echo "Categoria cadastrada com sucesso!!";
			} else {
				echo "Erro ao cadastrar categoria!!";
			}
			
		}
	}

	function getCategoriasMenu(){
		$pdo = pdo();

		$stmt = $pdo->prepare("SELECT * FROM categorias ORDER BY categoria ASC");
		$stmt->execute();

		$total = $stmt->rowCount();

		if ($total > 0) {
			while ($dados = $stmt->fetch(PDO::FETCH_ASSOC)) {
				echo "<li>{$dados['categoria']} <a href='area_adm/deletar_categoria/{$dados['id']}'>Deletar</a></li>";
			}
		}
	}

	function alterarDados(){
		if (isset($_POST['env']) && $_POST['env'] == "alt") {
			$pdo = pdo();
			$nSenha;

			if ($_POST['senha'] == getDadosUser("senha")) {
				$nSenha = $_POST['senha'];
			} else {
				$nSenha = password_hash($_POST['senha'], PASSWORD_BCRYPT);
			};

			$stmt = $pdo->prepare("UPDATE usuarios SET nome = :nome, senha = :senha WHERE usuario = :usuario");
			$stmt->execute([
				':nome' => $_POST['nome'],
				':senha' => $nSenha,
				':usuario' => $_SESSION['admLogin']
			]);

			$total = $stmt->rowCount();

			if ($total > 0) {
				echo "Dados Alterados!";
				redirecionar(3, "area_adm/editar_dados");
			} else {
				echo "Erro ao alterar os dados";
			}
		}
	}

	function logout(){
		session_destroy();
		redirecionar(2, "area_adm/login");
	}

	function contProjetos(){
		$pdo = pdo();

		$stmt = $pdo->prepare("SELECT id FROM projetos");
		$stmt->execute();

		echo $stmt->rowCount();
	}

	function contProjetos1(){
		$pdo = pdo();

		$stmt = $pdo->prepare("SELECT id FROM projetos WHERE categoria = 1");
		$stmt->execute();

		echo $stmt->rowCount();
	}

	function contProjetos2(){
		$pdo = pdo();

		$stmt = $pdo->prepare("SELECT id FROM projetos WHERE categoria = 2");
		$stmt->execute();

		echo $stmt->rowCount();
	}

	function contProjetos3(){
		$pdo = pdo();

		$stmt = $pdo->prepare("SELECT id FROM projetos WHERE categoria = 3");
		$stmt->execute();

		echo $stmt->rowCount();
	}

/*-----------------------------------FUNÇÕES - PORTFÓLIO-----------------------------------*/

	function paginacao(){
		$url = (isset($_GET['pagina'])) ? $_GET['pagina'] : 'home';
		$explode = explode('/', $url);
		$dir = 'pags/php/';
		$ext = '.php';

		if (file_exists($dir.$explode[0].$ext)) {
			include($dir.$explode[0].$ext);
		} else {
			include($dir."p".$ext);
		}
	}

	function getProjetos(){
		$pdo = pdo();

		$url = (isset($_GET['pagina'])) ? $_GET['pagina'] : 'dashboard';
		$explode = explode('/', $url);
		$pg = (isset($explode['2'])) ? $explode['2'] : 1;
		$maximo = numProjPag;
		$inicio = ($pg - 1) * $maximo;

		$stmt = $pdo->prepare("SELECT * FROM projetos ORDER BY id DESC limit $inicio, $maximo");
		$stmt->execute();


		$total = $stmt->rowCount();

		if ($total > 0) {
			while ($dados = $stmt->fetch(PDO::FETCH_ASSOC)) {
				echo "<div class='cont-portfolio'>
						<img src='{$dados['imagem']}'>
							<h3>{$dados['titulo']}</h3>
								".limitChar($dados['descricao'])."
						</div>";
			}
		}
	}

	function limitChar($descricao){
		if (strlen($descricao) <= limiteCaracteres) {
			return $descricao;
		} else {
			return mb_substr($descricao, 0, limiteCaracteres)."...";
		}
	}

	function listaPaginas(){
		$pdo = pdo();

		$stmt = $pdo->prepare("SELECT * FROM projetos");
		$stmt->execute();
		$total = $stmt->rowCount();

		$maximo = numProjPag;
		$links = ceil($total/$maximo);
		$pg = (isset($explode['1'])) ? $explode['1'] : 1;

		for ($i = 1; $i < $pg + $links; $i++) { 
			echo "<li><a href='portfolio/projetos/{$i}'>{$i}</a></li>";
		}
	}

	function listaPaginasCategoria($categoria){
		$pdo = pdo();

		$stmt = $pdo->prepare("SELECT * FROM projetos WHERE categoria = :categoria");
		$stmt->execute([":categoria" => $categoria]);
		$total = $stmt->rowCount();

		$maximo = numProjPag;
		$links = ceil($total/$maximo);
		$pg = (isset($explode['1'])) ? $explode['1'] : 1;

		for ($i = 1; $i < $pg + $links; $i++) { 
			echo "<li><a href='categoria/{$categoria}/projetos/{$i}'>{$i}</a></li>";
		}
	}

	/*function getRecentes(){
		$pdo = pdo();

		$pg = (isset($explode['2'])) ? $explode['2'] : 1;
		$maximo = numRecentes;
		$inicio = ($pg - 1) * $maximo;

		$stmt = $pdo->prepare("SELECT * FROM projetos ORDER BY id DESC limit $inicio, $maximo");
		$stmt->execute();

		$total = $stmt->rowCount();

		if ($total > 0) {
			while ($dados = $stmt->fetch(PDO::FETCH_ASSOC)) {
				echo "	<div class='img-recentes'>
							<a href='{$dados['subtitulo']}'><img src='{$dados['imagem']}'></a>
						</div>
					";
			}
		}
	}*/

/*-------------------------------CLASSIFICAR CATEGORIA - FAÇO DEPOIS----------------------------------*/



	function getFiltrarCategorias(){
		$pdo = pdo();
		$stmt = $pdo->prepare("SELECT * FROM categorias ORDER BY id ASC");
		$stmt->execute();
		$total = $stmt->rowCount();

		if ($total > 0) {
			while ($dados = $stmt->fetch(PDO::FETCH_ASSOC)) {
				echo "<li><a href='categoria/{$dados['id']}'>{$dados['categoria']}</a></li>";
			}
		}
	}

	/*
	
	function selecionarCategoria(){
		$pdo = pdo();
		$stmt = $pdo->prepare("SELECT * FROM categorias ORDER BY id ASC");
		$stmt->execute();
		$total = $stmt->rowCount();

		if ($total > 0) {
			while ($dados = $stmt->fetch(PDO::FETCH_ASSOC)) {
				echo "<li><a href='categoria/{$dados['categoria']}'>{$dados['categoria']}</a></li>";
			}
		}
	}


	*/	

	function getProjetosCategoria($categoria){
		$pdo = pdo();

		$url = (isset($_GET['pagina'])) ? $_GET['pagina'] : 'dashboard';
		$explode = explode('/', $url);
		$pg = (isset($explode['3'])) ? $explode['3'] : 1;
		$maximo = numProjPag;
		$inicio = ($pg - 1) * $maximo;

		$stmt = $pdo->prepare("SELECT * FROM projetos WHERE categoria = :categoria ORDER BY id DESC limit $inicio, $maximo");
		$stmt->execute([':categoria' => $categoria]);


		$total = $stmt->rowCount();

		if ($total > 0) {
			while ($dados = $stmt->fetch(PDO::FETCH_ASSOC)) {
				echo "<div class='cont-portfolio'>
						<a href='{$dados['subtitulo']}'><img src='{$dados['imagem']}'></a>
							<h3>{$dados['titulo']}</h3>
								<h5>".limitChar($dados['descricao'])."</h5>
						</div>";
			}
		}
	}

	function exibirProjeto(){

		$url = (isset($_GET['pagina'])) ? $_GET['pagina'] : 'home';
		$explode = explode('/', $url);

		$pdo = pdo();

		$stmt = $pdo->prepare("SELECT * FROM projetos WHERE subtitulo = :subtitulo");
		$stmt->execute([':subtitulo' => $explode[0]]);
		$total = $stmt->rowCount();

		if ($total <= 0) {
			include("pags/php/404.php");
			exit();
		} else {
			return $stmt->fetch(PDO::FETCH_ASSOC);
		}
	}

	function gerarTitulo($titulo){

		$url = (isset($_GET['pagina'])) ? $_GET['pagina'] : 'home';
		$explode = explode('/', $url);

		switch ($explode['0']) {
			case 'home':
				echo $titulo."";
				break;

			case 'portfolio':
				echo $titulo." - Portfólio";
				break;

			case 'p':
				$dados = exibirProjeto($explode['1']);
				echo $titulo." - Portfólio - ".$dados['titulo'];
				break;

			case 'contato':
				echo $titulo." - Contato";
				break;

			case 'categoria':
				echo $titulo." - Categoria - ".getNomeCategoria($explode['1']);
				break;

			case '404':
				echo $titulo." - 404 - Não encontrado";
				break;

			default:
			$dados = exibirProjeto($explode['0']);
			echo $titulo." - Portfólio - ".$dados['titulo'];
			break;
		}
	}

	
?>