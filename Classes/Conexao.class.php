<?php

	class Conexao{
	
		protected $id;
		protected $con;
		
		function __construct(){ //Método construtora para estabelecer uma conexao.
		
			$local = "localhost"; //Onde o banco se encontra, geralmente localhost
			$dbname = "Anderson"; //Indica o nome do banco de dados que sera aberto
			$usuario = "root"; //Indica o nome de usuario que tem acesso
			$password = ""; //Indica a senha do usario
			
			//1- Se conecta ao servidor MySQL. 
			if (!($this-> id = mysql_connect($local, $usuario, $password))){
			
				echo "Não foi possível estabelecer uma conexão com o gerenciador MySQL. Favor contactar o Administrador.";
				exit;
			
			}
			
			//2- Seleciona o banco de dados
			if (!($this-> con = mysql_select_db($dbname, $this-> id))){
			
				echo "N&atilde;o foi possivel estabelecer uma conex&atilde;o com o banco de dados. Favor comunique o Administrador.";
				exit;
			
			}
		
		}
		
		//function __destruct(){ //Classe destrutora, desfaz a conexão.
		
			//mysql_close($this->id);
		
		//}
	
	}

?>