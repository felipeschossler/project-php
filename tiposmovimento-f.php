<html lang="pt-br">
    <head>
        <title>Cadastrar - Tipos de Movimento</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" media="screen" href="./css/mystyle.css" />
    </head>
    <body>
        <form name="dadosTipoMov" action="tiposmovimento-c.php" method="POST">
            <table border="1">
                <tbody>
                    <tr>
                        <td>Código:</td>
                        <td><input type="text" name="idTipoMov" value="" disabled="true" /></td>
                    </tr>   
                    <tr>
                        <td>Descrição:</td>
                        <td><input type="text" name="descTipoMov" value="" onkeyup="this.value = this.value.toUpperCase();"/></td>
                    </tr>
                    <tr>
                        <td>Tipo de Movimento: D-Débito C-Crédito</td>
                        <td><input type="text" name="tipoMov" value="" onkeyup="this.value = this.value.toUpperCase();"/></td>
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