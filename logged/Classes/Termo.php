<?php
 
    
 require'Conexao.php';
 
    class Termo{
        private $id;
        private $name;
        private $desc;
        private $status;
        private $idUser;
    
        // Getters ================================================================

        public function getId(){return $this->id;}
        public function getName(){return $this->name;}
        public function getDesc(){return $this->desc;}
        public function getStatus(){return $this->status;}
        public function getIdUser(){return $this->nivel;}
        
        

        // Setters ================================================================

        public function setId($id){$this->id = $id;}
        public function setName($name){$this->name = $name;}
        public function setDesc($desc){$this->desc = $desc;}
        public function setStatus($status){$this->status = $status;}
        public function setIdUser($idUser){$this->User = $idUser;}
        
        // Banco ================================================================

        static function Listar($s){
            $conexao = Conexao::Conectar();

            if($s == 0){

                $stmt = $conexao->prepare("
                SELECT * FROM tb_termos 
                    inner join tb_user on tb_termos.id_user = tb_user.id_user
                        WHERE tb_termos.`status` = $s
                            order by `nome`");
    
                try{
                    $stmt->execute();
                } catch (Exception $e){
                    echo $e;
                }
    
                while($row = $stmt->fetch(PDO::FETCH_BOTH)){
                    echo("
                        <div class='card'>
                            <h1>".$row['nome']."</h1>
                            <span class='user'>".$row['nome_user']."</span>            

                            <div class='op'>
                                <div class='group'>
                                    <a href='javascript:void(0)' data-r='1' class='aceitar' id='".$row['id']."'>Aceitar</a>
                                    <a href='javascript:void(0)' data-r='2' class='recusar' id='".$row['id']."'>Recusar</a>
                                </div>
                            </div>

                            <div class='content'>
                                <p>".$row['desc']."</p>
                            </div>
                        </div>
                    ");
                }
            }else{
                $query = (isset($_GET['query'])) ? $_GET['query'] : '';    

                $stmt = $conexao->prepare("
                    select * from `tb_termos`
                        inner join tb_user on tb_termos.id_user = tb_user.id_user
                            WHERE tb_termos.`nome` like '%$query%' and tb_termos.`status`=$s
                                order by `nome`");

                try {
                    $stmt->execute();
                } catch (PDOException $e) {
                    echo "<pre>".$e->getMessage()."</pre>";
                }

                while($row = $stmt->fetch(PDO::FETCH_BOTH)){
                    echo("
                    
                        <div class='flip-card' tabIndex='0'>
                            <div class='flip-card-inner'>
                    
                            <div class='flip-card-front'>
                                <h3>".$row['nome']."</h3>
                            </div>
                    
                            <div class='flip-card-back'>
                                <h3>".$row['desc']."
                                    <span>Créditos
                                        <span class='cre'>
                                        ".$row['nome_user']."
                                        </span>                          
                                    </span>
                                </h3>
                            </div>
                    
                            </div>
                        </div>
                    
                    ");
                }
                echo("
                    <a href='./colaborar.php'>
                        <div class='flip-card' tabIndex='0'>
                            <div class='flip-card-inner'>
            
                                <div class='flip-card-front'>
                                <h3 style='font-size: 3rem'>+</h3>
                                </div>
            
                                <div class='flip-card-back'>
                                <h3>Sentiu falta de algum termo? Contribua para nosso site!</h3>
                                </div>
                                
                            </div>
                        </div>
                    </a> 
                ");
            }
        }

        static function Permissao($r, $id){
            $conexao = Conexao::Conectar();

            $stmt = $conexao->prepare("update tb_termos
                                            set status = $r
                                                where id = $id
                                            ");

            try {
                $stmt->execute();
            } catch (Exception $e) {
                echo $e;
            }

        }

        function Cadastrar($termo, $id){
            $conexao = Conexao::Conectar();
            $stmt = $conexao->prepare("Insert into tb_termos(`nome`,`desc`, `status`, `id_user`)
                values(?,?,0,$id) ");
                
                $stmt->bindValue(1, $termo->getName());
                $stmt->bindValue(2, $termo->getDesc());

            try {
            $stmt->execute();
            }catch (Exception $e) {
            echo $e;
            }
        }

        function Contribuicoes($id){
            $conexao = Conexao::Conectar();
            $stmt = $conexao->prepare("
                select * from tb_termos
                    where tb_termos.`id_user` = $id");
            try {
                $stmt->execute();
            } catch (Exception $e) {
                echo $e;
            }

            while($row = $stmt->fetch(PDO::FETCH_BOTH)){
                $st = 0;
                switch($row['status']){
                    case 0:
                        $st = "Pendente";
                        break;
                    case 1:
                        $st = "Aceita";
                        break;
                    case 2:
                        $st = "Recusada";
                        break;
                }
                echo("
                    <div ");
                if($row['status'] == 0){
                    echo("style='filter: brightness(.7); color: #999;");
                }else if($row['status'] == 2){
                    echo("style='background-color: #a55;");
                }
                
                echo("' class='card'>
                        <span class='sts'>".$st."</span>                
                        <h2 class='titulo'>".$row['nome']."</h2>
                        <h3 class='desc'>".$row['desc']."</h3>
                    </div>
                ");
            }
        }
}

    
   
?>