<?php 
    //Cliente
    include("cliente-c.php");
    $grupoCli = selectTodosClientes();
?>

<html lang="pt-br">
    <head>
        <title>Gerar Movimento</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" media="screen" href="./css/mystyle.css" />
    </head>
    <body>
        <form name="dadosAgencia" action="movimento-f.php" method="POST">
            <table border="1">
                <tbody>
                <tr>
                    <td>Cliente:</td>
                    <td>
                        <select name="idCliente">
                            <?php
                                foreach ($grupoCli as $Clientes)
                                echo '<option value=" ' . $Clientes['idCliente'] . '"> ' . $Clientes['nomeCliente'] . ' </option>';
                            ?>
                        </select> 
                    </td>
                </tr>
                <tr>
                    <td><input type="submit"/></td>
                </tr>  
                </tbody>
            </table>
        </form>
        <a href="index.html">Voltar ao início</a>
</body>          
</html>