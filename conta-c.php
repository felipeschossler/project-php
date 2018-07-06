<?php
    
    //verificando valor da acao para redirecionar para a determinada acao
    if(isset($_POST["acao"])){
        if ($_POST["acao"] == "Enviar"){
            inserirConta();
        }
        if ($_POST["acao"] == "Alterar"){
            alterarConta();
        }
        if ($_POST["acao"] == "Excluir"){
            excluirConta();
        }
        
    }
    
    //funcao que passa o local e as credenciais para logar no banco
    function abrirBanco(){
        $conexao = new mysqli("localhost","root","","banco");
        return $conexao;
    }

    //funcao que redireciona para a página inicial
    function voltarIndex(){
        header("location:index.php");
    }

    //funcao que insere agencia
    function inserirConta(){

        $banco = abrirBanco();
        //declarando as variáveis usadas na inserção dos dados
        $limiteConta = $_POST["limiteConta"];
        $dataAbertura = $_POST["dataAbertura"];

        //a consulta sql
        $sql = "INSERT INTO Contas(limiteConta,dataAbertura) VALUES ('$limiteConta','$dataAbertura')";
        
        //executando a inclusão
        $banco->query($sql);
        //fechando a conexao com o banco
        $banco->close();
        voltarIndex();

    }

    function selectTodos(){
        
        $banco = abrirBanco();
        //a consulta sql
        $sql = "SELECT * FROM Contas ORDER BY limiteConta";
        //executando a consulta
        $resultado = $banco->query($sql);
        //mostra todos os usuários dentro do array
        
        while ($row = mysqli_fetch_array($resultado)){
            $grupo [] = $row;
        }

        $banco->close();
        return $grupo;

    }

    //funcao que mostra as agencias já preenchido para a alteração
    function selectIdConta($idConta){
        
        $banco = abrirBanco();
        //a consulta sql
        $sql = "SELECT * FROM Contas WHERE idConta ='$idConta'";
        $resultado = $banco->query($sql);
        $banco->close();
        $Contas = mysqli_fetch_assoc($resultado);
        return $Contas;

    }
    
    //funcao que altera uma único agencia especifica
    function alterarConta(){
        
        $banco = abrirBanco();
        
        //declarando as variáveis usadas no update
        $idConta = $_POST["idConta"];
        $limiteConta = $_POST["limiteConta"];
        $dataAbertura = $_POST["dataAbertura"];

        //update no usuario especifico no qual já deve existir a informação
        $sql = "UPDATE Contas SET limiteConta='$limiteConta',dataAbertura='$dataAbertura' WHERE idConta='$idConta'";
        $banco->query($sql);
        $banco->close();
        voltarIndex();

    }

    function excluirConta(){
        
        $banco = abrirBanco();

        //variável id que vai ser usada na consulta
        $idConta = $_POST["idConta"]; 

        //delete do usuário específico 
        $sql = "DELETE FROM Contas WHERE idConta='$idConta'";
        $banco->query($sql);
        $banco->close();
        voltarIndex();

    }

?>