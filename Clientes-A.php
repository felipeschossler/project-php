<?php ob_start() ?>

<html>
	<head>
		<title>
			Alteração dos clientes
		</title>
		<link rel="stylesheet" type="text/css" href="menu.css">
	</head>
	
	<body>
		<?php
			$idCliente = $_POST['idCliente'];
			$nomeCliente = $_POST['nomeCliente'];
            $cidadeCliente = $_POST['cidadeCliente'];
            $cpfCliente = $_POST['cpfCliente'];
            $tipoCliente = $_POST['tipoCliente'];
            $situacaoCliente = $_POST['situacaoCliente'];
		
			include_once("./classes/Conexao.class.php");
			include_once("./classes/Cliente.class.php");
			
			$con = new Conexao();
			$Cliente = new Clientes($idCliente, $nomeCliente, $cidadeCliente, $cpfCliente, $tipoCliente, $situacaoCliente);
			
			$Cliente->alterarCliente();
		
			header ('location: Menu.php?pag=Clientes-C');
		?>
	</body>
</html>