<?php 
include("tiposmovimento-c.php"); 
$TiposMovimento = selectIdTipoMov($_POST["idTipoMov"]);
?>
<html lang="pt-br">
<head>
    <title>Alterar - Tipos de Movimento</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/mystyle.css" />
</head>
<body>
    <form name="dadosTiposMov" action="tiposmovimento-c.php" method="POST">
        <table border="1">
            <tbody>
                <tr>
                    <td>Código:</td>
                    <td><input type="text" name="idTipoMov" value="<?=$TiposMovimento["idTipoMov"]?>" size="20" disabled="true" /></td>
                </tr>   
                <tr>
                    <td>Descrição:</td>
                    <td><input type="text" name="descTipoMov" value="<?=$TiposMovimento["descTipoMov"]?>" onkeyup="this.value = this.value.toUpperCase();"/></td>
                </tr>
                <tr>
                    <td>Tipo Movimento:</td>
                    <td><input type="text" name="tipoMov" value="<?=$TiposMovimento["tipoMov"]?>" size="20" onkeyup="this.value = this.value.toUpperCase();"/></td>
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
    <a href="index.html">Voltar ao início</a>
</body>
</html>
