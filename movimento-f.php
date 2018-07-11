<?php 
    //Cliente
    include("cliente-c.php"); 
    $Clientes = selectIdCliente($_POST["idCliente"]);

    //Conta
    include("conta-c.php");
    $grupoConta = selectTodosConta();

    //Tipomov
    include("tiposmovimento-c.php");
    $grupoTipoMov = selectTodosTipoMov();
?>

<DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Gerar Movimento</title>
        <meta charset="utf-8">
    </head>
        <form name="Movimentos" action="movimento-c.php" method="POST">
            <table border="1">
                <tbody>
                    <tr>
                        <td>Cliente:</td>
                        <td><input type="text" name="<?=$Clientes["idCliente"]?>" value="<?=$Clientes["idCliente"]?>" disabled="true" /></td>
                    </tr>   
                    <tr>
                        <td>Conta:</td>
                        <td>
                            <select name="idConta">
                                <?php 
                                    foreach ($grupoConta as $Contas)
                                    echo '<option name="' . $Contas['idConta'] . '" value=" ' . $Contas['idConta'] . '"> ' . $Contas['idConta'] . ' </option>';
                                ?>
                            </select> 
                        </td>
                    </tr>
                    <tr>
                        <td>Tipo de Movimento:</td>
                        <td>
                            <select name="idTipoMov">
                                <?php
                                    foreach ($grupoTipoMov as $TiposMovimento)
                                    echo '<option name="' . $TiposMovimento['idTipoMov'] . '" value=" ' . $TiposMovimento['idTipoMov'] . '"> ' . $TiposMovimento['idTipoMov'] . ' </option>';
                                ?>
                            </select> 
                        </td>
                    </tr>
                    <tr>
                        <td>Data Movimento - AAAA-MM-DD</td> 
                        <td><input type="text" name="dataMovimento" value="" /></td>
                    </tr>
                    <tr>
                        <td>Valor do Movimento:</td>
                        <td><input type="text" name="valorMovimento" value="" /></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="acao" value="Enviar" /></td>
                    </tr>
                </tbody>
            </table>
        </form>  
</html>