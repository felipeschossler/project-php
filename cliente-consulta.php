<?php include("cliente-c.php");
    $grupo = selectTodos();
    //var_dump($grupo);
?>
<html lang="pt-br">
<head>
    <title>Consulta - Cliente</title>
    <meta charset="utf-8">
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Cidade</th>
                <th>Tipo de Cliente F=Física/J=Jurídica</th>
                <th>Situação do Cliente A=Ativo/I=Inativo</th>
                <th>Editar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($grupo as $Clientes) { ?>
                <tr>
                    <td><?=$Clientes["nomeCliente"]?></td>
                    <td><?=$Clientes["cpfCliente"]?></td>
                    <td><?=$Clientes["cidadeCliente"]?></td>
                    <td><?=$Clientes["tipoCliente"]?></td>
                    <td><?=$Clientes["situacaoCliente"]?></td>
                    <td>
                        <form nome="alterar" action="cliente-a.php" method="POST">
                            <input type="hidden" name="idCliente" value=<?=$Clientes["idCliente"]?> />
                            <input type="submit" name="Editar" value="Editar" />
                        </form>
                    </td>
                    <!--
                    <td>
                        <form name="excluir" action="cliente-c.php" method="POST">
                            <input type="hidden" name="idCliente" value=<?=$Clientes["idCliente"]?> />
                            <input type="submit" name="acao" value="Excluir" />
                        </form>    
                        
                    </td>
                    -->
                </tr>   
            <?php } ?>
        </tbody>
    </table>
    <br>
    <a href="index.html">Voltar ao início</a>
</body>
</html>
        
