<html lang="pt-br">
    <head>
        <title>Cadastrar - Agência</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" media="screen" href="./css/mystyle.css" />
    </head>
    <body>
        <form name="dadosAgencia" action="agencia-c.php" method="POST">
            <table border="1">
                <tbody>
                    <tr>
                        <td>Código Agência:</td>
                        <td><input type="text" name="idAgencia" value="" disabled="true" /></td>
                    </tr>   
                    <tr>
                        <td>Nome:</td>
                        <td><input type="text" name="nomeAgencia" value="" onkeyup="this.value = this.value.toUpperCase();"/></td>
                    </tr>
                    <tr>
                        <td>Cidade:</td>
                        <td><input type="text" name="cidadeAgencia" value="" onkeyup="this.value = this.value.toUpperCase();"/></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="acao" value="Enviar" onclick="alert('Cadastro efetuado com sucesso.');"></td>
                    </tr>
                </tbody>
            </table>
        </form>
        <a href="index.html">Voltar ao início</a>
</body>          
</html>