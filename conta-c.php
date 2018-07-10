<?php  
    
    @$idConta 	          = $_POST['idConta'];
    @$nomeAgencia         = $_POST['nomeAgencia'];  //FK
    @$nomeCliente         = $_POST['nomeCliente'];  //FK
    @$descricaoTipoConta  = $_POST['descricaoTipoConta'];  //FK
    @$limiteConta         = $_POST['limiteConta'];
    @$dataAbertura        = $_POST['dataAbertura'];

    $Conta = new Contas($idConta, $nomeAgencia, $nomeCliente, $descricaoTipoConta, $limiteConta, $dataAbertura);

    //funcao que passa o local e as credenciais para logar no banco
    function abrirBanco(){
        $conexao = new mysqli("localhost","root","","banco");
        return $conexao;
    }

    //verificando valor da acao para redirecionar para a determinada acao
    if(isset($_POST["acao"])){
        if ($_POST["acao"] == "Enviar"){
            $Conta -> inserirConta();
        }
        if ($_POST["acao"] == "Alterar"){
            $Conta -> alterarConta();
        }
        if ($_POST["acao"] == "Excluir"){
            $Conta -> excluirConta();
        }
    
    }

    
    class Contas{

        private $idConta;
        private $nomeAgencia;
        private $nomeCliente;
        private $descricaoTipoConta;
        private $limiteConta;
        private $dataAbertura;

        //codigoArma
            
        public function getIdConta(){
        
            return $this->idConta;
        
        }
        
        public function setIdConta($idConta){
        
            $this->idConta = $idConta;
        
        }

        //nomeAgencia
            
        public function getNomeAgencia(){
            
            "SELECT idAgencia
            FROM Agencias
            WHERE idAgencia =". $this-> nomeAgencia;
        
        }
        
        public function setNomeAgencia($nomeAgencia){
        
            $this->nomeAgencia = $nomeAgencia;
        
        }

        //nomeCliente
        
        public function getNomeCliente(){
        
            "SELECT idCliente
            FROM Clientes
            WHERE idCliente =". $this-> nomeCliente;
        
        }
        
        public function setNomeCliente($nomeCliente){
        
            $this->nomeCliente = $nomeCliente;
        
        }

        //descricaoTipoConta

        public function getDescricaoTipoConta(){

            "SELECT idTipoConta
            FROM TiposDeConta
            WHERE idTipoConta =". $this-> descricaoTipoConta;
        
        }
        
        public function setDescricaoTipoConta($descricaoTipoConta){
        
            $this->descricaoTipoConta = $descricaoTipoConta;
        
        }

        //limiteConta
            
        public function getLimiteConta(){
        
            return $this->limiteConta;
        
        }
        
        public function setLimiteConta($limiteConta){
        
            $this->limiteConta = $limiteConta;
        
        }

        //dataAbertura
        
        public function getDataAbertura(){

            return $this->dataAbertura;
        
        }
        
        public function setDataAbertura($dataAbertura){
        
            $this->dataAbertura = $dataAbertura;
        
        }
        
        //funcao que redireciona para a página inicial
        function voltarIndex(){
            header("location:index.html");
        }

        //funcao que insere agencia
        function inserirConta(){

            $conexao = abrirBanco();

            //a consulta sql
            $sql = "INSERT INTO Contas(
                        idConta, 
                        nomeAgencia, 
                        nomeCliente,
                        limiteConta,
                        dataAbertura) 
                    VALUES ('NULL',
                    '".$this ->nomeAgencia."',
                    '".$this ->nomeCliente."',
                    '".$this ->descricaoTipoConta."',
                    '".$this ->getLimiteConta()."',
                    '".$this ->getDataAbertura()."');";
            
            //executando a inclusão
            $conexao -> query($sql);
            //fechando a conexao com o banco
            $conexao -> close();
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

    }

?>