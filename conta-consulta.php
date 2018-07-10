<?php 

    include("conta-c.php");

    //pega por post o componente codigo do formulario -F.
    @$idConta 	          = $_POST['idConta'];
    @$nomeAgencia         = $_POST['nomeAgencia'];  //FK
    @$nomeCliente         = $_POST['nomeCliente'];  //FK
    @$descricaoTipoConta  = $_POST['descricaoTipoConta'];  //FK
    @$limiteConta         = $_POST['limiteConta'];
    
    $grupo = selectTodos();
    //var_dump($grupo);
?>

<table border="1">
    <thead>
        <tr>
            <th>ID Conta</th>
            <th>ID Agencia</th>
            <th>ID Cliente</th>
            <th>ID TipoConta</th>
            <th>Limite Conta</th>
            <th>Data Abertura</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($grupo as $Contas) { ?>
            <tr>
                <td><?=$Contas["idConta"]?></td>
                <td><?=$Contas["idAgencia"]?></td>
                <td><?=$Contas["idCliente"]?></td>
                <td><?=$Contas["idTipoConta"]?></td>
                <td><?=$Contas["limiteConta"]?></td>
                <td><?=$Contas["dataAbertura"]?></td>
                <td>
                    <form nome="alterar" action="conta-a.php" method="POST">
                        <input type="hidden" name="idConta" value=<?=$Contas["idConta"]?> />
                        <input type="submit" name="Editar" value="Editar" />
                    </form>
                </td>
                <td>
                    <form name="excluir" action="conta-c.php" method="POST">
                        <input type="hidden" name="idConta" value=<?=$Contas["idConta"]?> />
                        <input type="submit" name="acao" value="Excluir" />
                    </form>    
                    
                </td>
            </tr>   

        <?php } ?>

    </tbody>
</table>
        
