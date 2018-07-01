<?php include("agencia-c.php");
    $grupo = selectTodos();
    //var_dump($grupo);
?>

<table border="1">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Cidade</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($grupo as $Agencias) { ?>
            <tr>
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
                        <input type="submit" name="acao" value="Excluir" />
                    </form>    
                    
                </td>
            </tr>   

        <?php } ?>

    </tbody>
</table>
        
