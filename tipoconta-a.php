<?php 
include("tipoconta-c.php"); 
$TiposDeConta = selectIdTipoConta($_POST["idTipoConta"]);
?>
<html lang="pt-br">
<head>
    <title>Alterar - Tipo de Conta</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/mystyle.css" />
</head>
<body>
    <form name="dadosTipoConta" action="tipoconta-c.php" method="POST">
        <table border="1">
            <tbody>
                <tr>
                    <td>Código Tipo de Conta:</td>
                    <td><input type="text" name="idTipoConta" value="<?=$TiposDeConta["idTipoConta"]?>" size="20" disabled="true" /></td>
                </tr>   
                <tr>
                    <td>Descrição:</td>
                    <td><input type="text" name="descricaoTipoConta" value="<?=$TiposDeConta["descricaoTipoConta"]?>" onkeyup="this.value = this.value.toUpperCase();"/></td>
                </tr>
                <tr>
                    <td>
                        <input type="hidden" name="acao" value="Alterar" />
                        <input type="hidden" name="idTipoConta" value="<?=$TiposDeConta["idTipoConta"]?>" onkeyup="this.value = this.value.toUpperCase();"/>
                    </td>
                    <td><input type="submit" name="enviar" value="Alterar" /></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>
