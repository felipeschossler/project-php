<?php 
include("agencia-c.php"); 
$Agencias = selectIdAgencia($_POST["idAgencia"]);
?>
<html lang="pt-br">
<head>
    <title>Alterar - Agência</title>
    <meta charset="utf-8">
</head>
<body>
    <form name="dadosAgencia" action="agencia-c.php" method="POST">
        <table border="1">
            <tbody>
                <tr>
                    <td>Código Agência</td>
                    <td><input type="text" name="idAgencia" value="<?=$Agencias["idAgencia"]?>" size="20" disabled="true" /></td>
                </tr>   
                <tr>
                    <td>Nome</td>
                    <td><input type="text" name="nomeAgencia" value="<?=$Agencias["nomeAgencia"]?>" /></td>
                </tr>
                <tr>
                    <td>Cidade</td>
                    <td><input type="text" name="cidadeAgencia" value="<?=$Agencias["cidadeAgencia"]?>" size="20" /></td>
                </tr>
                <tr>
                    <td>
                        <input type="hidden" name="acao" value="Alterar" />
                        <input type="hidden" name="idAgencia" value="<?=$Agencias["idAgencia"]?>" />
                    </td>
                    <td><input type="submit" name="enviar" value="Alterar" /></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>