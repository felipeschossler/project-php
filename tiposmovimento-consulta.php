<?php include("tiposmovimento-c.php");
    $grupo = selectTodos();
    //var_dump($grupo);
?>

<table border="1">
    <thead>
        <tr>
            <th>Descrição</th>
            <th>Tipo Movimento</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($grupo as $TiposMovimento) { ?>
            <tr>
                <td><?=$TiposMovimento["descTipoMov"]?></td>
                <td><?=$TiposMovimento["tipoMov"]?></td>
                <td>
                    <form nome="alterar" action="tiposmovimento-a.php" method="POST">
                        <input type="hidden" name="idTipoMov" value=<?=$TiposMovimento["idTipoMov"]?> />
                        <input type="submit" name="Editar" value="Editar" />
                    </form>
                </td>
                <td>
                    <form name="excluir" action="tiposmovimento-c.php" method="POST">
                        <input type="hidden" name="idTipoMov" value=<?=$TiposMovimento["idTipoMov"]?> />
                        <input type="submit" name="acao" value="Excluir" />
                    </form>    
                    
                </td>
            </tr>   

        <?php } ?>

    </tbody>
</table>
        
