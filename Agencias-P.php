<?php ob_start() ?>

<?php

		@$codigoAgencia = $_POST['codigoAgencia'];
		@$nomeAgencia = $_POST['nomeAgencia'];
		@$cidadeAgencia = $_POST['cidadeAgencia'];

		
		//disponibiliza a classe conexão
		include_once("./classes/Conexao.class.php");
		include_once("./classes/Agencia.class.php");
		
		//instancia um objeto na classe de conexao
		$con = new Conexao();
		
		$Agencia = new Agencia($codigoAgencia, $nomeAgencia, $cidadeAgencia);
			
	

	if (isset($_GET['acao'])) {
	
		//variavel acao é enviada por get do método listar do .class ou não tem valor algum quando vem diretamente em resposta ao action do formulario -F.
	
		$acao = $_GET['acao'];
	
	}
	
	
	
	switch (@$acao){
	
		//inclusão
		case 0 :
			
			//chama o metodo incluir da instancia
			$Agencia->incluirAgencia();
		
			header ('location: Menu.php?pag=Agencia-C');
		
		break;
		
		//exclusão
		case 1 :
		
			if (isset($_GET['chave'])){
			
				$chave = $_GET['chave'];
			
			}

			//chama o método excluirOrganizacaoMilitar da instancia
			$Agencia->excluirAgencia($chave);
			
			header ('location: Menu.php?pag=Agencia-C');
		
		break;
		
	
	}
	
?>