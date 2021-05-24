<?php
    require'Conexao.php';
    class User{
        private $id;
        private $name;
        private $email;
        private $senha;
        private $nivel;
        private $ativo;
        private $data;

        // Getters ================================================================

        public function getId(){return $this->id;}
        public function getName(){return $this->name;}
        public function getEmail(){return $this->email;}
        public function getSenha(){return $this->senha;}
        public function getNivel(){return $this->nivel;}
        public function getAtivo(){return $this->ativo;}
        public function getData(){return $this->data;}
        

        // Setters ================================================================

        public function setId($id){$this->id = $id;}
        public function setName($name){$this->name = $name;}
        public function setEmail($email){$this->email = $email;}
        public function setSenha($senha){$this->senha = $senha;}
        public function setNivel($nivel){$this->nivel = $nivel;}
        public function setAtivo($ativo){$this->ativo = $ativo;}
        public function setData($data){$this->data = $data;}
        

        // Banco ==================================================================

        public function VerificarCadastro($n, $e){
            $conexao = Conexao::Conectar();
            $stmt = $conexao->prepare("select `nome_user`, `email_user` from tb_user
                                        where(nome_user like binary '$n')
                                         or (email_user like binary '$e') limit 1");
        
            try {
                $stmt->execute();
            } catch (Exception $e) {
                echo $e;
            }
        
            $rows = $stmt->fetchAll();          
            if(count($rows) != 0){
                $stmt->execute();
                while($row = $stmt->fetch(PDO::FETCH_BOTH)){
                    return ($row['nome_user']==$n) ? 1 : (($row['email_user']==$e) ? 2 : 0);
                }
            }else{
                return 0;
            }            
        } 

        public function VerificarLogin($n, $s){

        }

        public function Cadastrar($user){
            $n = $user->getName();
            $e = $user->getEmail();

            $cod = $this->VerificarCadastro($n, $e);
            
            switch($cod){
                case 0:
                   $conexao = Conexao::Conectar();

                   $stmt= $conexao->prepare("Insert into tb_user
                                                values(null, ?, ?, SHA1(?), 1, 1, now())");
                    $stmt->bindValue(1, $user->getName());
                    $stmt->bindValue(2, $user->getEmail());
                    $stmt->bindValue(3, $user->getSenha());

                    try {
                        $stmt->execute();
                    } catch (Exception $e) {
                        echo $e;
                    }
                
                   break;
                
                case 1:
                    header("Location: ../cadastro.php?c=1");
                    break;
                
                case 2:
                    header("Location: ../cadastro.php?c=2");
                    break;
            }

        }        

        public function Logar($n, $s){
            $conexao = Conexao::Conectar();

            $stmt = $conexao->prepare("select `id_user`, `nome_user`, `nivel_user` from tb_user where(nome_user like binary '".$n."') and (`senha_user` = '".sha1($s)."') and (`ativo_user` = 1) limit 1");
            $stmt->execute();
            $rows = $stmt->fetchAll();
            if(count($rows) != 1){
                header("Location: ../login.php?l=0");
            }else{
                if(!isset($_SESSION)) session_start();

                $stmt = $conexao->prepare("select `id_user`, `nome_user`, `nivel_user`, `email_user` from tb_user where(`nome_user` = '".$n."') and (`senha_user` = '".sha1($s)."') and (`ativo_user` = 1) limit 1");
                $stmt->execute();

                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

                    $_SESSION['userId'] = $row['id_user'];
                    $_SESSION['userNome'] = $row['nome_user'];
                    $_SESSION['userNivel'] = $row['nivel_user'];
                    $_SESSION['userEmail'] = $row['email_user'];

                }

                header("Location: ../logged/index.php");
            }
        }
        
    }
    
?>
    

