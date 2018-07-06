<DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Cadastrar - Cliente</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" media="screen" href="./css/mystyle.css" />
    </head>
    <body>
        <form name="dadosCliente" action="cliente-c.php" method="POST">
            <table border="1">
                <tbody>
                    <tr>
                        <td>Código Cliente:</td>
                        <td><input type="text" name="idCliente" value="" disabled="true" /></td>
                    </tr>   
                    <tr>
                        <td>Nome:</td>
                        <td><input type="text" name="nomeCliente" value="" onkeyup="this.value = this.value.toUpperCase();"/></td>
                    </tr>
                    <tr>
                        <td>CPF:</td>
                        <td><input type="text" name="cpfCliente" value="" onkeyup="this.value = this.value.toUpperCase();"/></td>
                    </tr>
                    <tr>
                        <td>Cidade:</td>
                        <td><input type="text" name="cidadeCliente" value="" onkeyup="this.value = this.value.toUpperCase();"/></td>
                    </tr>
                    <tr>
                        <td>Tipo de Cliente: F=Física/J=Jurídica</td>
                        <td>
                            <select name="tipoCliente">
                                <option name="tipoCliente" value="F">F</option>
                                <option name="tipoCliente" value="J">J</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Situação do Cliente: A=Ativo/I=Inativo</td>
                        <td>
                            <select name="situacaoCliente">
                                <option name="situacaoCliente" value="A">A</option>
                                <option name="situacaoCliente" value="I">I</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="acao" value="Enviar" onclick="alert('Cadastro efetuado com sucesso.');"/></td>
                    </tr>
                </tbody>
            </table>
        </form>
        <a href="index.html">Voltar ao início</a>
    </body>           
</html>