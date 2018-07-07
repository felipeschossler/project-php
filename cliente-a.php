<?php 
include("cliente-c.php"); 
$Clientes = selectIdCliente($_POST["idCliente"]);
?>
<html lang="pt-br">
<head>
    <title>Alterar - Cliente</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/mystyle.css" />
</head>
<body>
    <form name="dadosCliente" action="cliente-c.php" method="POST">
        <table border="1">
            <tbody>
                <tr>
                    <td>Código Cliente:</td>
                    <td><input type="text" name="idCliente" value="<?=$Clientes["idCliente"]?>" size="20" disabled="true" /></td>
                </tr>   
                <tr>
                    <td>Nome:</td>
                    <td><input type="text" name="nomeCliente" value="<?=$Clientes["nomeCliente"]?>" onkeyup="this.value = this.value.toUpperCase();"/></td>
                </tr>
                <tr>
                    <td>CPF:</td>
                    <td><input type="text" name="cpfCliente" value="<?=$Clientes["cpfCliente"]?>" onkeyup="this.value = this.value.toUpperCase();"/></td>
                </tr>
                <tr>
                    <td>Cidade:</td>
                    <td><input type="text" name="cidadeCliente" value="<?=$Clientes["cidadeCliente"]?>" onkeyup="this.value = this.value.toUpperCase();"/></td>
                </tr>
                <tr>
                    <td>Tipo de Cliente: F=Físico/J=Jurídico</td>
                    <td>
                        <select name="tipoCliente">
                            <option name="tipoCliente" value="F">F</option>
                            <option name="tipoCliente" value="J">J</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Situação do Cliente A=Ativo/I=Inativo</td>
                    <td>
                        <select name="situacaoCliente">
                            <option name="situacaoCliente" value="A">A</option>
                            <option name="situacaoCliente" value="I">I</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="hidden" name="acao" value="Alterar" />
                        <input type="hidden" name="idCliente" value="<?=$Clientes["idCliente"]?>" />
                    </td>
                    <td><input type="submit" name="enviar" value="Alterar" /></td>
                </tr>
            </tbody>
        </table>
    </form>
    <a href="index.html">Voltar ao início</a>
</body>
</html>
