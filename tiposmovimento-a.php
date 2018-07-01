<?php 
include("tiposmovimento-c.php"); 
$TiposMovimento = selectIdTipoMov($_POST["idTipoMov"]);
?>
<head>
    <title>Alterar Tipo de Movimento</title>
    <meta charset="utf-8">
</head>
<form name="dadosTiposMov" action="tiposmovimento-c.php" method="POST">
    <table border="1">
        <tbody>
            <tr>
                <td>Código</td>
                <td><input type="text" name="idTipoMov" value="<?=$TiposMovimento["idTipoMov"]?>" size="20" disabled="true" /></td>
            </tr>   
            <tr>
                <td>Descrição</td>
                <td><input type="text" name="descTipoMov" value="<?=$TiposMovimento["descTipoMov"]?>" /></td>
            </tr>
            <tr>
                <td>Tipo Movimento</td>
                <td><input type="text" name="tipoMov" value="<?=$TiposMovimento["tipoMov"]?>" size="20" /></td>
            </tr>
            <tr>
                <td>
                    <input type="hidden" name="acao" value="Alterar" />
                    <input type="hidden" name="idTipoMov" value="<?=$TiposMovimento["idTipoMov"]?>" />
                </td>
                <td><input type="submit" name="enviar" value="Alterar" /></td>
            </tr>
        </tbody>
    </table>
</form>
