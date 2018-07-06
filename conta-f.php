<?php 
    //Agencia
    include("agencia-c.php");
    include("cliente-c.php");

    $grupo = selectTodos();    
    $grupoCli = vemNenemCliente();
    
?>

<DOCTYPE html>
    <html lang="pt-br">
        <head>
            <title>Adicionar Conta</title>
            <meta charset="utf-8">
        </head>
        
            <form name="dadosConta" action="conta-c.php" method="POST">
    
                <table border="1">
                    <tbody>
    
                        <tr>
                            <td>Código Conta</td>
                            <td><input type="text" name="idConta" value="" disabled="true" /></td>
                        </tr>   
                       
                        <tr>
                            <td>Agencia</td>
                            <td>
                                <select name="idAgencia">
                                    <?php 
                                        foreach ($grupo as $Agencias)
                                        echo '<option value=" ' . $Agencias['idAgencia'] . '"> ' . $Agencias['nomeAgencia'] . ' </option>';
                                    ?>
                                </select> 
                            </td>
                        </tr>

                        <tr>
                            <td>Cliente</td>
                            <td>
                                <select name="idCliente">
                                    <?php
                                        foreach ($grupoCli as $Clientes)
                                        echo '<option value=" ' . $Clientes['idCliente'] . '"> ' . $Clientes['idCliente'] . ' </option>';
                                    ?>
                                </select> 
                            </td>
                        </tr>
                        <tr>
                            <td>Tipo Conta</td>
                            <td><input type="text" name="idTipoConta" value="" /></td>
                        </tr>
                        <tr>
                            <td>Limite de Conta</td>
                            <td><input type="text" name="limiteConta" value="" /></td>
                        </tr>
                        <tr>
                            <td>Data de Abertura</td>
                            <td><input type="text" name="dataAbertura" value="" /></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="acao" value="Enviar" /></td>
                        </tr>
    
                    </tbody>
                </table>
    
            </form>  
    </html>