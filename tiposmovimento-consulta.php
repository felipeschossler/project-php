<?php include("tiposmovimento-c.php");
    $grupo = selectTodos();
    //var_dump($grupo);
?>
<html lang="pt-br">
<head>
    <title>Consulta - Tipos de Movimento</title>
    <meta charset="utf-8">
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Código:</th>
                <th>Descrição:</th>
                <th>Tipo Movimento:</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($grupo as $TiposMovimento) { ?>
                <tr>
                    <td><?=$TiposMovimento["idTipoMov"]?></td>
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
        
        
