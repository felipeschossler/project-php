<?php include("agencia-c.php");
    $grupo = selectTodos();
    //var_dump($grupo);
?>
<html lang="pt-br">
<head>
    <title>Consulta - Agência</title>
    <meta charset="utf-8">
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Código:</th>
                <th>Nome</th>
                <th>Cidade</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($grupo as $Agencias) { ?>
                <tr>
                    <td><?=$Agencias["idAgencia"]?></td>
                    <td><?=$Agencias["nomeAgencia"]?></td>
                    <td><?=$Agencias["cidadeAgencia"]?></td>
                    <td>
                        <form nome="alterar" action="agencia-a.php" method="POST">
                            <input type="hidden" name="idAgencia" value=<?=$Agencias["idAgencia"]?> />
                            <input type="submit" name="Editar" value="Editar" />
                        </form>
                    </td>
                    <td>
                        <form name="excluir" action="agencia-c.php" method="POST">
                            <input type="hidden" name="idAgencia" value=<?=$Agencias["idAgencia"]?> />
                            <input type="submit" name="acao" value="Excluir" onclick="alert('Cadastro excluído com sucesso.');"/>
                        </form>    
                    </td>
                </tr>   
            <?php } ?>
        </tbody>
    </table>
    <br>
    <a href="index.html">Voltar ao início</a>
</body>
</html>
    
        
