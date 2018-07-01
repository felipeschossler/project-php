<?php include("tipoconta-c.php");
    $grupo = selectTodos();
    //var_dump($grupo);
?>
<head>
    <title>Consulta Tipos de Conta</title>
    <meta charset="utf-8">
</head>
<table border="1">
    <thead>
        <tr>
            <th>Código</th>
            <th>Descrição</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($grupo as $TiposDeConta) { ?>
            <tr>
                <td><?=$TiposDeConta["idTipoConta"]?></td>
                <td><?=$TiposDeConta["descricaoTipoConta"]?></td>
                <td>
                    <form nome="alterar" action="tipoconta-a.php" method="POST">
                        <input type="hidden" name="idTipoConta" value=<?=$TiposDeConta["idTipoConta"]?> />
                        <input type="submit" name="Editar" value="Editar" />
                    </form>
                </td>
                <td>
                    <form name="excluir" action="tipoconta-c.php" method="POST">
                        <input type="hidden" name="idTipoConta" value=<?=$TiposDeConta["idTipoConta"]?> />
                        <input type="submit" name="acao" value="Excluir" />
                    </form>    
                    
                </td>
            </tr>   

        <?php } ?>

    </tbody>
</table>
        
