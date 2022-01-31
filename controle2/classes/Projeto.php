<?php 
class Projeto {
	public static $conn;

	public static function getConnection(){
		if (empty(self::$conn)) {
		$conexao = parse_ini_file('config/portfolio.ini');
		$host = $conexao['host'];
		$host = $conexao['name'];
		$host = $conexao['user'];
		$host = $conexao['pass'];

		self::$conn = new PDO("pgsql:dbname={$name}; user={$user}; password={$pass}; host={$host}");
		self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

	return self::$conn;
}

	public static function save($projetos_teste){
		$conn = self::getConnection();

		if (empty($projetos_teste['id'])) {
			$result = $conn->query("SELECT max(id) as next FROM projetos_teste");
			$row = $result->fetch();
			$projetos_teste['id'] = (int) $row['next'] +1;

			$sql = "INSERT INTO projetos_teste (id, nome, descricao, cliente, ano, url)
			VALUES (:id, :nome, :descricao, :cliente, :ano, :url)";
		}
	 else {
		$sql = "UPDATE projetos_teste SET nome		= :nome,
								  		  descricao	= :descricao,
								  		  cliente	= :cliente,
										  ano		= :ano,
										  url		= :url					  
								WHERE id = :id";
	}
	$return = $conn->prepare($sql);
	$result->execute([':id'			=> $projetos_teste['id'],
					  ':nome'		=> $projetos_teste['nome'],
					  ':descricao'	=> $projetos_teste['descricao'],
					  ':cliente'	=> $projetos_teste['cliente'],
					  ':ano'		=> $projetos_teste['ano'],
					  ':url'		=> $projetos_teste['url'],
		]);
}
}
?>