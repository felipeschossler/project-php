<?php
    
    //verificando valor da acao para redirecionar para a determinada acao
    if(isset($_POST["acao"])){
        if ($_POST["acao"] == "Enviar"){
            inserirAgencia();
        }
        if ($_POST["acao"] == "Alterar"){
            alterarAgencia();
        }
        if ($_POST["acao"] == "Excluir"){
            excluirAgencia();
        }
        
    }
    
    //funcao que passa o local e as credenciais para logar no banco
    function abrirBanco(){
        $conexao = new mysqli("localhost","root","","banco");
        return $conexao;
    }

    //funcao que redireciona para a página inicial
    function voltarIndex(){
        header("location:index.html");
    }

    //funcao que insere agencia
    function inserirAgencia(){

        $banco = abrirBanco();
        //declarando as variáveis usadas na inserção dos dados
        $nomeAgencia = $_POST["nomeAgencia"];
        $cidadeAgencia = $_POST["cidadeAgencia"];

        //a consulta sql
        $sql = "INSERT INTO Agencias(nomeAgencia,cidadeAgencia) VALUES ('$nomeAgencia','$cidadeAgencia')";
        
        //executando a inclusão
        $banco->query($sql);
        //fechando a conexao com o banco
        $banco->close();
        voltarIndex();

    }

    function selectTodos(){
        
        $banco = abrirBanco();
        //a consulta sql
        $sql = "SELECT * FROM Agencias ORDER BY nomeAgencia";
        //executando a consulta
        $resultado = $banco->query($sql);
        //mostra um alert se não tiver nem um dado na table
        if($resultado->num_rows === 0){
            ?>
                <script type="text/javascript">
                alert("Nenhuma agência foi cadastrada.");
                window.location.href = "index.html";
                </script>
            <?php
        }
        else{
            //mostra todos os usuários dentro do array
            while ($row = mysqli_fetch_array($resultado)){
                $grupo [] = $row;
            }
            
            $banco->close();
            return $grupo;
        }
    }

    //funcao que mostra as agencias já preenchido para a alteração
    function selectIdAgencia($idAgencia){
        
        $banco = abrirBanco();
        //a consulta sql
        $sql = "SELECT * FROM Agencias WHERE idAgencia ='$idAgencia'";
        $resultado = $banco->query($sql);
        $banco->close();
        $Agencias = mysqli_fetch_assoc($resultado);
        return $Agencias;

    }
    
    //funcao que altera uma único agencia especifica
    function alterarAgencia(){
        
        $banco = abrirBanco();
        
        //declarando as variáveis usadas no update
        $idAgencia = $_POST["idAgencia"];
        $nomeAgencia = $_POST["nomeAgencia"];
        $cidadeAgencia = $_POST["cidadeAgencia"];

        //update no usuario especifico no qual já deve existir a informação
        $sql = "UPDATE Agencias SET nomeAgencia='$nomeAgencia',cidadeAgencia='$cidadeAgencia' WHERE idAgencia='$idAgencia'";
        $banco->query($sql);
        $banco->close();
        voltarIndex();

    }

    function excluirAgencia(){
        
        $banco = abrirBanco();

        //variável id que vai ser usada na consulta
        $idAgencia = $_POST["idAgencia"]; 

        //delete do usuário específico 
        $sql = "DELETE FROM Agencias WHERE idAgencia='$idAgencia'";
        $banco->query($sql);
        $banco->close();
        voltarIndex();

    }

?>