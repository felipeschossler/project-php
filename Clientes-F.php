<!DOCTYPE html>
<html>
<head>
    <title>Clientes</title>
</head>
<body>
	<form name="Agencias" method="POST" action="Agencias-P.php" onSubmit="return ValidaAgencia()">
        <center>
            <h3>Cadastro de Clientes</h3><br>
            <table border="0">
                <tr>
                    <th align="right">
                        Código
                    </th>
                    <th align="left">
                        <input type="text" name="idCliente" size="20" maxlength="20">
                    </th>
                </tr>
                 <tr>
                    <th align="right">
                        Nome
                    </th>
                    <th align="left">
                        <input type="text" name="nomeCliente" title="Informe o nome da cliente" size="20" maxlength="20">
                    </th>
                </tr>
                 <tr>
                    <th align="right">
                        Cidade
                    </th>
                    <th align="left">
                        <input type="text" name="cidadeCliente" title="Informe a cidade do cliente" size="20" maxlength="20">
                    </th>
                </tr>
                <tr>
                    <th align="right">
                        CPF
                    </th>
                    <th align="left">
                        <input type="text" name="cpfCliente" title="Informe o cpf do cliente" size="20" maxlength="20">
                    </th>
                </tr>
                <tr>
                    <th align="right">
                        Tipo de Cliente
                    </th>
                    <th align="left">
                        <select>
                            <option>Física</option>
                            <option>Jurídica</option>
                        </select>
                    </th>
                </tr>
                <tr>
                    <th align="right">
                        Situação do Cliente
                    </th>
                    <th align="left">
                        <select>
                            <option>Ativo</option>
                            <option>Inativo</option>
                        </select>
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
</html>