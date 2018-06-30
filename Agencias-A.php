<?php ob_start() ?>

<html>

	<head>
	
		<title>
		
			Altera&ccedil;&atilde;o das agencias
		
		</title>
	
		<link rel="stylesheet" type="text/css" href="menu.css">
	
	</head>
	
	<body>
	
		<?php
		
			$codigoAgencia = $_POST['codigoAgencia'];
			$nomeAgencia = $_POST['nomeAgencia'];
			$cidadeAgencia = $_POST['cidadeAgencia'];
		
			include_once("./classes/Conexao.class.php");
			include_once("./classes/Agencia.class.php");
			
			$con = new Conexao();
			$Agencia = new Agencias($codigoAgencia, $nomeAgencia, $cidadeAgencia);
			
			$Agencia->alterarAgencia();
		
			header ('location: Menu.php?pag=Agencias-C');
		
		?>
		
	</body>

</html>