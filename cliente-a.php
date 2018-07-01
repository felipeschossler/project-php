<?php 
include("cliente-c.php"); 
$Clientes = selectIdCliente($_POST["idCliente"]);
?>
<head>
    <title>Alterar Cliente</title>
    <meta charset="utf-8">
</head>
<form name="dadosCliente" action="cliente-c.php" method="POST">
    <table border="1">
        <tbody>
            <tr>
                <td>Código Cliente</td>
                <td><input type="text" name="idCliente" value="<?=$Clientes["idCliente"]?>" size="20" disabled="true" /></td>
            </tr>   
            <tr>
                <td>Nome</td>
                <td><input type="text" name="nomeCliente" value="<?=$Clientes["nomeCliente"]?>" /></td>
            </tr>
            <tr>
                <td>CPF</td>
                <td><input type="text" name="cpfCliente" value="<?=$Clientes["cpfCliente"]?>" /></td>
            </tr>
            <tr>
                <td>Cidade</td>
                <td><input type="text" name="cidadeCliente" value="<?=$Clientes["cidadeCliente"]?>" /></td>
            </tr>
            <tr>
                <td>Tipo de Cliente</td>
                <td>
                    <select>
                        <option value="0">Física</option>
                        <option value="1">Jurídica</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Situação do Cliente</td>
                <td>
                    <select>
                        <option value="0">Ativo</option>
                        <option value="1">Inativo</option>
                    </select>
                </td>
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
