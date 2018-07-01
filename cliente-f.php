<DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Adicionar Cliente</title>
        <meta charset="utf-8">
    </head>
    
        <form name="dadosCliente" action="cliente-c.php" method="POST">

            <table border="1">
                <tbody>

                    <tr>
                        <td>Código Cliente</td>
                        <td><input type="text" name="idCliente" value="" disabled="true" /></td>
                    </tr>   
                    <tr>
                        <td>Nome</td>
                        <td><input type="text" name="nomeCliente" value="" /></td>
                    </tr>
                    <tr>
                        <td>CPF</td>
                        <td><input type="text" name="cpfCliente" value="" /></td>
                    </tr>
                    <tr>
                        <td>Cidade</td>
                        <td><input type="text" name="cidadeCliente" value="" /></td>
                    </tr>
                    <tr>
                        <td>Tipo de Cliente F=Física/J=Jurídica</td>
                        <td><input type="text" name="tipoCliente" value="" /></td>
                    </tr>
                    <tr>
                        <td>Situação do Cliente A=Ativo/I=Inativo</td>
                        <td><input type="text" name="situacaoCliente" value="" /></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="acao" value="Enviar" /></td>
                    </tr>

                </tbody>
            </table>

        </form>  
</html>