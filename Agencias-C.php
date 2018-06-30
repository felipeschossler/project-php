<html>
	<head>
		<title>
			Consulta de Agencias
		</title>
		<link rel="stylesheet" type="text/css" href="menu.css">
	</head>
	<body>
		<?php
			$codigoAgencia = 0;
			$nomeAgencia   = NULL;
			$cidadeAgencia = NULL;
		
			include_once("./classes/Conexao.class.php");
			include_once("./classes/Agencias.class.php");
			
			$con = new Conexao();
			$Agencia = new Agencias($codigoAgencia, $nomeAgencia, $cidadeAgencia);
			
			$Agencia-> listarAgencia();
		?>
	</body>
</html>