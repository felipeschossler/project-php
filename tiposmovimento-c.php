<?php
    
    //verificando valor da acao para redirecionar para a determinada acao
    if(isset($_POST["acao"])){
        if ($_POST["acao"] == "Enviar"){
            inserirTipoMov();
        }
        if ($_POST["acao"] == "Alterar"){
            alterarTipoMov();
        }
        if ($_POST["acao"] == "Excluir"){
            excluirTipoMov();
        }
        
    }
    
    //funcao que passa o local e as credenciais para logar no banco
    function abrirBancoTipoMov(){
        $conexao = new mysqli("localhost","root","","banco");
        return $conexao;
    }

    //funcao que redireciona para a página inicial
    function voltarIndexTipoMov(){
        header("location:index.html");
    }

    //funcao que insere agencia
    function inserirTipoMov(){

        $banco = abrirBancoTipoMov();
        //declarando as variáveis usadas na inserção dos dados
        $descTipoMov = $_POST["descTipoMov"];
        $tipoMov = $_POST["tipoMov"];

        //a consulta sql
        $sql = "INSERT INTO TiposMovimento(descTipoMov,tipoMov) VALUES ('$descTipoMov','$tipoMov')";
        
        //executando a inclusão
        $banco->query($sql);
        //fechando a conexao com o banco
        $banco->close();
        voltarIndexTipoMov();

    }

    function selectTodosTipoMov(){
        
        $banco = abrirBancoTipoMov();
        //a consulta sql
        $sql = "SELECT * FROM TiposMovimento";
        //executando a consulta
        $resultado = $banco->query($sql);
        //mostra todos os usuários dentro do array
        if($resultado->num_rows === 0){
            ?>
                <script type="text/javascript">
                alert("Nenhum Tipo de Movimento foi cadastrado.");
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
    function selectIdTipoMov($idTipoMov){
        
        $banco = abrirBancoTipoMov();
        //a consulta sql
        $sql = "SELECT * FROM TiposMovimento WHERE idTipoMov ='$idTipoMov'";
        $resultado = $banco->query($sql);
        $banco->close();
        $TiposMovimento = mysqli_fetch_assoc($resultado);
        return $TiposMovimento;

    }
    
    //funcao que altera uma único agencia especifica
    function alterarTipoMov(){
        
        $banco = abrirBancoTipoMov();
        
        //declarando as variáveis usadas no update
        $idTipoMov = $_POST["idTipoMov"];
        $descTipoMov = $_POST["descTipoMov"];
        $tipoMov = $_POST["tipoMov"];

        //update no usuario especifico no qual já deve existir a informação
        $sql = "UPDATE TiposMovimento SET descTipoMov='$descTipoMov',tipoMov='$tipoMov' WHERE idTipoMov='$idTipoMov'";
        $banco->query($sql);
        $banco->close();
        voltarIndexTipoMov();

    }

    function excluirTipoMov(){
        
        $banco = abrirBancoTipoMov();

        //variável id que vai ser usada na consulta
        $idTipoMov = $_POST["idTipoMov"]; 

        //delete do usuário específico 
        $sql = "DELETE FROM TiposMovimento WHERE idTipoMov='$idTipoMov'";
        $banco->query($sql);
        $banco->close();
        voltarIndexTipoMov();

    }

?>