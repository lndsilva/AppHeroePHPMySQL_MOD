<?php 	
	//Classe DbConnect
	class DbConnect
	{
		//Variável para armazenar o link do banco de dados
		private $con;
	 
		//Construtor da classe
		function __construct()
		{
	 
		}
	 
		//Este método irá se conectar ao banco de dados
		function connect()
		{
			//Incluindo o arquivo constants.php para obter as constantes do banco de dados
			include_once dirname(__FILE__) . '/Constants.php';
	 
			//conectando ao banco de dados mysql
			$this->con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	 
			//Verificando se algum erro ocorreu durante a conexão
			if (mysqli_connect_errno()) {
				echo "Falha de conexão com o MySQL: " . mysqli_connect_error();
			}
	 
			//Retornando o link de conexão
			return $this->con;
		}
	 
	}