<?php 

    include("movimento-c.php");

    //pega por post o componente codigo do formulario -F.
    @$idCliente      = $_POST['idCliente'];  //FK
    @$idConta        = $_POST['idConta'];  //FK
    @$idTipoMov      = $_POST['idTipoMov'];  //FK
    @$dataMovimento  = $_POST['dataMovimento'];
    @$valorMovimento = $_POST['valorMovimento'];
    
    $grupoMov = selectTodosMov();
    //var_dump($grupo);
?>

<table border="1">
    <thead>
        <tr>
            <th>ID Cliente</th>
            <th>ID Conta</th>
            <th>ID TipoConta</th>
            <th>Data Movimento</th>
            <th>Valor Movimento</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($grupoMov as $Movimentos) { ?>
            <tr>
                <td><?=$Movimentos["idCliente"]?></td>
                <td><?=$Movimentos["idConta"]?></td>
                <td><?=$Movimentos["idTipoMov"]?></td>
                <td><?=$Movimentos["dataMovimento"]?></td>
                <td><?=$Movimentos["valorMovimento"]?></td>
            </tr>   

        <?php } ?>

    </tbody>
</table>
        
