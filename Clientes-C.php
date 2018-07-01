<html>
	<head>
		<title>
			Consulta de Clientes
		</title>
		<link rel="stylesheet" type="text/css" href="menu.css">
	</head>
	<body>
		<?php
			$idCliente = 0;
			$nomeCliente   = NULL;
            $cidadeCliente = NULL;
            $cpfCliente = NULL;
			$tipoCliente = NULL;
            $situacaoCliente = NULL;

			include_once("./classes/Conexao.class.php");
			include_once("./classes/Clientes.class.php");
			
			$con = new Conexao();
			$Cliente = new Clientes($idCliente, $nomeCliente, $cidadeCliente, $cpfCliente, $tipoCliente, $situacaoCliente);
			
			$Cliente-> listarCliente();
		?>
	</body>
</html>