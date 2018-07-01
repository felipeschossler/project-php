<?php
    
    //verificando valor da acao para redirecionar para a determinada acao
    if(isset($_POST["acao"])){
        if ($_POST["acao"] == "Enviar"){
            inserirTipoConta();
        }
        if ($_POST["acao"] == "Alterar"){
            alterarTipoConta();
        }
        if ($_POST["acao"] == "Excluir"){
            excluirTipoConta();
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

    //funcao que insere tipo de conta
    function inserirTipoConta(){

        $banco = abrirBanco();
        //declarando as variáveis usadas na inserção dos dados
        $descricaoTipoConta = $_POST["descricaoTipoConta"];

        //a consulta sql
        $sql = "INSERT INTO TiposdeConta(descricaoTipoConta) VALUE ('$descricaoTipoConta')";
        
        //executando a inclusão
        $banco->query($sql);
        //fechando a conexao com o banco
        $banco->close();
        voltarIndex();

    }

    function selectTodos(){
        
        $banco = abrirBanco();
        //a consulta sql
        $sql = "SELECT * FROM TiposDeConta ORDER BY descricaoTipoConta";
        //executando a consulta
        $resultado = $banco->query($sql);
        //mostra todos os usuários dentro do array
        
        while ($row = mysqli_fetch_array($resultado)){
            $grupo [] = $row;
        }

        $banco->close();
        return $grupo;

    }

    //funcao que mostra o tipo de conta já preenchido para a alteração
    function selectIdTipoConta($idTipoConta){
        
        $banco = abrirBanco();
        //a consulta sql
        $sql = "SELECT * FROM TiposDeConta WHERE idTipoConta ='$idTipoConta'";
        $resultado = $banco->query($sql);
        $banco->close();
        $TiposDeConta = mysqli_fetch_assoc($resultado);
        return $TiposDeConta;

    }
    
    //funcao que altera um tipo de movimento especifico
    function alterarTipoConta(){
        
        $banco = abrirBanco();
        
        //declarando as variáveis usadas no update
        $idTipoConta = $_POST["idTipoConta"];
        $descricaoTipoConta = $_POST["descricaoTipoConta"];

        //update no usuario especifico no qual já deve existir a informação
        $sql = "UPDATE TiposDeConta SET descricaoTipoConta='$descricaoTipoConta' WHERE idTipoConta='$idTipoConta'";
        $banco->query($sql);
        $banco->close();
        voltarIndex();

    }

    function excluirTipoConta(){
        
        $banco = abrirBanco();

        //variável id que vai ser usada na consulta
        $idTipoConta = $_POST["idTipoConta"]; 

        //delete do usuário específico 
        $sql = "DELETE FROM TiposDeConta WHERE idTipoConta='$idTipoConta'";
        $banco->query($sql);
        $banco->close();
        voltarIndex();

    }

?>