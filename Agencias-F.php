<<!DOCTYPE html>
<html>
<head>
    <title>Agencias</title>
</head>
<body>
		<form name="Agencias" method="POST" action="Agencias-P.php" onSubmit="return ValidaAgencia()">
		    
        <center>
            
            <h3>Cadastro de Agencias</h3><br>
    
            <table border="0">
        
                <tr>
        
                    <th align="right">
            
                        Código da Agencia - CODAG
                    
                    </th>
            
                    <th align="left">
            
                        <input type="text" name="codigoAgencia" title="Informe a agencia" size="20" maxlength="20">
            
                    </th>
        
                </tr>

                 <tr>
        
                    <th align="right">

                        Nome
                    
                    </th>

                    <th align="left">

                        <input type="text" name="nomeAgencia" title="Informe o nome da agencia" size="20" maxlength="20">

                    </th>

                </tr>

                 <tr>
        
                    <th align="right">

                        Cidade
                    
                    </th>

                    <th align="left">

                        <input type="text" name="cidadeAgencia" title="Informe a cidade da agencia" size="20" maxlength="20">

                    </th>

                </tr>
            
            </table>

            <table border="0">
            
                <tr>
            
                    <th>
                        
                        <input type="submit" title="Salvar">
                    
                    </th>
                    
                    <th>
                    
                        <input type="reset" title="Limpar">
                    
                    </th>
                    
                    <th>
                    
                        <a href="Menu.php?pag=Agencias-C">

                            <img src="./imagens/lupa.png"  title="Consultar" height="30" width="30"/>
                    
                        </a>
                    
                    </th>
                    
                </tr>
        
            </table>
            
        </center>
    
    </form>
    
</body>
</html>>