<?php
    
    //verificando valor da acao para redirecionar para a determinada acao
    if(isset($_POST["acao"])){
        if ($_POST["acao"] == "Enviar"){
            inserirCliente();
        }
        if ($_POST["acao"] == "Alterar"){
            alterarCliente();
        }
        if ($_POST["acao"] == "Excluir"){
            excluirCliente();
        }
        
    }
    
    //funcao que passa o local e as credenciais para logar no banco
    function abrirBancoCliente(){
        $conexao = new mysqli("localhost","root","","banco");
        return $conexao;
    }

    //funcao que redireciona para a página inicial
    function voltarIndexCliente(){
        header("location:index.html");
    }

    //funcao que insere agencia
    function inserirCliente(){

        $banco = abrirBancoCliente();
        //declarando as variáveis usadas na inserção dos dados
        $nomeCliente = $_POST["nomeCliente"];
        $cpfCliente = $_POST["cpfCliente"];
        $cidadeCliente = $_POST["cidadeCliente"];
        $tipoCliente = $_POST["tipoCliente"];
        $situacaoCliente = $_POST["situacaoCliente"];

        //a consulta sql
        $sql = "INSERT INTO Clientes(nomeCliente,cpfCliente, cidadeCliente, tipoCliente, situacaoCliente) VALUES ('$nomeCliente','$cpfCliente', '$cidadeCliente', '$tipoCliente', '$situacaoCliente')";
        
        //executando a inclusão
        $banco->query($sql);
        //fechando a conexao com o banco
        $banco->close();
        voltarIndexCliente();

    }

    function vemNenemCliente(){
        
        $banco = abrirBancoCliente();
        //a consulta sql
        $sql = "SELECT * FROM Clientes WHERE situacaoCliente = 'A' ORDER BY nomeCliente";
        //executando a consulta
        $resultado = $banco->query($sql);
        //mostra todos os usuários dentro do array
        if($resultado->num_rows === 0){
            ?>
                <script type="text/javascript">
                alert("Nenhum cliente está cadastrado ou ativo.");
                window.location.href = "index.html";
                </script>
            <?php
        }
        else{
            while ($row = mysqli_fetch_array($resultado)){
                $grupo [] = $row;
            }

            $banco->close();
            return $grupo;
        }

    }

    //funcao que mostra as agencias já preenchido para a alteração
    function selectIdCliente($idCliente){
        
        $banco = abrirBancoCliente();
        //a consulta sql
        $sql = "SELECT * FROM Clientes WHERE idCliente ='$idCliente'";
        $resultado = $banco->query($sql);
        $banco->close();
        $Clientes = mysqli_fetch_assoc($resultado);
        return $Clientes;

    }
    
    //funcao que altera uma único agencia especifica
    function alterarCliente(){
        
        $banco = abrirBancoCliente();
        
        //declarando as variáveis usadas no update
        $idCliente = $_POST["idCliente"];
        $nomeCliente = $_POST["nomeCliente"];
        $cpfCliente = $_POST["cpfCliente"];
        $cidadeCliente = $_POST["cidadeCliente"];
        $tipoCliente = $_POST["tipoCliente"];
        $situacaoCliente = $_POST["situacaoCliente"];

        //update no usuario especifico no qual já deve existir a informação
        $sql = "UPDATE Clientes SET nomeCliente='$nomeCliente', cpfCliente='$cpfCliente', cidadeCliente='$cidadeCliente', tipoCliente='$tipoCliente', situacaoCliente='$situacaoCliente' WHERE idCliente='$idCliente'";
        $banco->query($sql);
        $banco->close();
        voltarIndexCliente();

    }

    function excluirCliente(){
        
        $banco = abrirBancoCliente();

        //variável id que vai ser usada na consulta
        $idCliente = $_POST["idCliente"]; 

        //delete do usuário específico 
        $sql = "DELETE FROM Clientes WHERE idCliente='$idCliente'";
        $banco->query($sql);
        $banco->close();
        voltarIndexCliente();

    }

?>