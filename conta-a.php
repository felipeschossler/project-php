<?php 
include("conta-c.php"); 
$Contas = selectIdConta($_POST["idConta"]);
?>
<head>
    <title>Alterar Conta</title>
    <meta charset="utf-8">
</head>
<form name="dadosConta" action="conta-c.php" method="POST">
    <table border="1">
        <tbody>
            <tr>
                <td>Código Conta</td>
                <td><input type="text" name="idConta" value="<?=$Contas["idConta"]?>" size="20" disabled="true" /></td>
            </tr>   
            <tr>
                <td>Limite Conta</td>
                <td><input type="text" name="limiteConta" value="<?=$Contas["limiteConta"]?>" /></td>
            </tr>
            <tr>
                <td>Data Abertura</td>
                <td><input type="text" name="dataAbertura" value="<?=$Contas["dataAbertura"]?>" /></td>
            </tr>
            <tr>
                <td>
                    <input type="hidden" name="acao" value="Alterar" />
                    <input type="hidden" name="idConta" value="<?=$Agencias["idConta"]?>" />
                </td>
                <td><input type="submit" name="enviar" value="Alterar" /></td>
            </tr>
        </tbody>
    </table>
</form>
