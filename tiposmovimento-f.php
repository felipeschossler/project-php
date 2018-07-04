<html lang="pt-br">
    <head>
        <title>Cadastrar - Tipos de Movimento</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form name="dadosTipoMov" action="tiposmovimento-c.php" method="POST">

            <table border="1">
                <tbody>
                    <tr>
                        <td>Código</td>
                        <td><input type="text" name="idTipoMov" value="" disabled="true" /></td>
                    </tr>   
                    <tr>
                        <td>Descrição</td>
                        <td><input type="text" name="descTipoMov" value="" /></td>
                    </tr>
                    <tr>
                        <td>Tipo de Movimento</td>
                        <td><input type="text" name="tipoMov" value="" /></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="acao" value="Enviar" onclick="alert('Cadastro efetuado com sucesso.');"/></td>
                    </tr>
                </tbody>
            </table>

        </form>
    </body>          
</html>