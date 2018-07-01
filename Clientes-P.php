<?php ob_start() ?>

<?php
		@$idCliente = $_POST['idCliente'];
		@$nomeCliente = $_POST['nomeCliente'];
        @$cidadeCliente = $_POST['cidadeCliente'];
        @$cpfCliente = $_POST['cpfCliente'];
		@$tipoCliente = $_POST['tipoCliente'];
		@$situacaoCliente = $_POST['situacaoCliente'];
		
		//disponibiliza a classe conexão
		include_once("./classes/Conexao.class.php");
		include_once("./classes/Agencia.class.php");
		
		//instancia um objeto na classe de conexao
		$con = new Conexao();
		$Cliente = new Cliente($idCliente, $nomeCliente, $cidadeCliente, $cpfCliente, $tipoCliente, $situacaoCliente);

	if (isset($_GET['acao'])) {
		//variavel acao é enviada por get do método listar do .class ou não tem valor algum quando vem diretamente em resposta ao action do formulario -F.
		$acao = $_GET['acao'];
	}
	
	switch (@$acao){
		//inclusão
		case 0 :
			//chama o metodo incluir da instancia
			$Cliente->incluirCliente();
		
			header ('location: Menu.php?pag=Cliente-C');
		break;
		
		//exclusão
		case 1 :
			if (isset($_GET['chave'])){
				$chave = $_GET['chave'];
			}

			//chama o método excluirOrganizacaoMilitar da instancia
			$Agencia->excluirCliente($chave);
			
			header ('location: Menu.php?pag=Cliente-C');
		break;
	}
?>