<?php  
    
    //verificando valor da acao para redirecionar para a determinada acao
    if(isset($_POST["acao"])){
        if ($_POST["acao"] == "Enviar"){
            inserirMov();
        }    
    }

    //funcao que passa o local e as credenciais para logar no banco
    function abrirBancoMov(){
        $conexao = new mysqli("localhost","root","","banco");
        return $conexao;
    }

    //funcao que redireciona para a página inicial
    function voltarIndexMov(){
        header("location:index.html");
    }

    //funcao que insere agencia
    function inserirMov(){

        $banco = abrirBancoMov();
        //declarando as variáveis usadas na inserção dos dados
        $idCliente      = $_POST['idCliente'];
        $idConta        = $_POST['idConta'];
        $idTipoMov      = $_POST['idTipoMov'];
        $dataMovimento  = $_POST['dataMovimento'];
        $valorMovimento = $_POST['valorMovimento'];

        //a consulta sql
        $sql = "INSERT INTO Movimentos(
                    idCliente,
                    idConta, 
                    idTipoMov, 
                    dataMovimento,
                    valorMovimento) 
                VALUES (
                    '$idCliente',
                    '$idConta',
                    '$idTipoMov',
                    '$dataMovimento'
                    ,$valorMovimento)";
        
        //executando a inclusão
        $banco->query($sql);
        //fechando a conexao com o banco
        $banco->close();
        voltarIndexMov();

    }

    function selectTodosMov(){
        
        $banco = abrirBancoMov();
        //a consulta sql
        $sql = "SELECT * FROM Movimentos";
        //executando a consulta
        $resultado = $banco->query($sql);
        //mostra todos os usuários dentro do array
        if($resultado->num_rows === 0){
            ?>
                <script type="text/javascript">
                alert("Nenhuma conta está cadastrada.");
                window.location.href = "index.html";
                </script>
            <?php
        }else{
            while ($row = mysqli_fetch_array($resultado)){
                $grupo [] = $row;
            }

            $banco->close();
            return $grupo;
        }

    }

?>