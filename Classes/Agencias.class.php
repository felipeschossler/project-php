<?php

	class Acessorios{
	
		private $codigoAgencia;
		private $nomeAgencia;
		private $cidadeAgencia;

		
		public function __construct($codigoAgencia, $nomeAgencia, $cidadeAgencia){
		
			$this->codigoAgencia = $codigoAgencia;
			$this->nomeAgencia = $nomeAgencia;
			$this->cidadeAgencia = $cidadeAgencia;

		
		}
		
		//codigoAgencia
		
		public function getCodigoAgencia(){
		
			return $this->codigoAgencia;
		
		}
		
		public function setCodigoAgencia($codigoAgencia){
		
			$this->codigoAgencia = $codigoAgencia;
		
		}
		
		//nomeAgencia
		
		public function getNomeAgencia(){
		
			return $this->nomeAgencia;
		
		}
		
		public function setNomeAgencia($nomeAgencia){
		
			$this->nomeAgencia = $nomeAgencia;
		
		}
		
		//cidadeAgencia
		
		public function getCidadeAgencia(){
		
			return $this->cidadeAgencia;
		
		}
		
		public function setCidadeAgencia($cidadeAgencia){
		
			$this->cidadeAgencia = $cidadeAgencia;
		
		}
		
		//incluirAgencia
		
		public function incluirAgencia(){
		
			$query = "INSERT INTO Agencias(
						codigoAgencia,
						nomeAgencia,
						cidadeAgencia)
					VALUES('NULL',
					'" . $this->getNomeAgencia() . "',
					'" . $this->getCidadeAgencia() . "');";
					
			// echo $query;
			
			mysql_query($query) or die(mysql_error());
		
		}
		
		//alterarAgencia
		
		public function alterarAgencia(){
		
			$query = "UPDATE Agencias
					SET nomeAgencia = '" . $this->getNomeAgencia() . "' 
					WHERE codigoAgencia = '" . $this->getCodigoAgencia() ."';";
					
			// echo $query;
			
			mysql_query($query) or die(mysql_error());
		
		}
		
		//excluirAgencia
		
		public function excluirAgencia($codigoAgencia){
		
			$query = "DELETE FROM Agencias
					WHERE codigoAgencia = '" . $codigoAgencia . "';";
					
			// echo $query;
			
			mysql_query($query) or die(mysql_error());
		
		}
		
		//listarAgencia
		
		public function listarAgencia(){
		
			//lista as OM do banco atraves de sql embutido
			$query = "SELECT *
					FROM Agencias
					ORDER BY nomeAgencia";

			$res 	= mysql_query($query) or die(mysql_error()); 

			$nr = (int)mysql_num_rows($res);
			
			//monta uma tabela com os valores retornados do result set
			
			echo "<div id=\"cont\">";
			echo "<center>";
			echo "<table border=\"0\" align=\"center\" cellpading=\"5px\" cellspacing=\"5px\" width=\"auto\">";
			echo "	<tr><th colspan=\"4\" align=\"center\">AGENCIAS</th></tr>";
			echo "	<tr><th>C&oacute;digo</th><th>Nome</th><th>Cidade</th><th colspan=\"2\">Op&ccedil;&otilde;es</th></tr>";
			
			while($array = mysql_fetch_array($res)){
			
				echo "<tr class=\"tabela\">";
				
				//parte dinamica do código, onde é inserido os valores individuais de cada registro, pelo nome do atributo da tabela
				echo	"<td align=\"center\">".    $array['codigoAgencia'] ."</td>";
				echo	"<td align=\"center\">".	$array['nomeAgencia'] ."</td>";
				echo	"<td align=\"center\">".	$array['cidadeAgencia'] ."</td>";

				
				//alterar
				echo	"<td align=\"center\"><a href=Menu.php?pag=Acessorios-A&chave=". $array['codigoAgencia'] ."><img src=\"./imagens/editar.png\"  title=\"Alterar registro\" align=\"center\" height=\"30\" width=\"30\" border=\"0\"/></a></td>";
				
				//excluir
				echo	"<td align=\"center\"><a href=Acessorios-P.php?acao=1&chave=". $array['codigoAgencia'] ."><img src=\"./imagens/excluir.png\"  title=\"Excluir registro\" align=\"center\" height=\"30\" width=\"30\" border=\"0\"/></a></td>";
				
				echo "</tr>";
			}		
			
				echo "</table>";
				//voltar
				echo "<td align=\"center\"><a href=\"Menu.php?pag=Agencias-F\"> <img src=\"./imagens/voltar.bmp\"  title=\"Voltar\"             align=\"center\" height=\"16\" width=\"16\" border=\"0\"/></a></td>";
				echo "</center>";
			echo "</div>";
		
		}
		
		// localizarAgencia
		
		public function localizarAgencia($codigoAcessorio){
		
			$query = "SELECT codigoAgencia, nomeAgencia
					FROM Agencias
					WHERE codigoAgencia =" . $codigoAgencia;
			
			// echo $query;
			
			$res	= mysql_query($query) or die(mysql_error());
			$row 	= mysql_fetch_row($res);

			$this-> setCodigoAgencia($row[0]);
			$this-> setNomeAgencia($row[1]);
			
		}
	
	}

?>