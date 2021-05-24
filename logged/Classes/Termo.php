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

        function Listar($s){
            $conexao = Conexao::Conectar();
            $stmt = $conexao->prepare("
            SELECT * FROM tb_termos 
                inner join tb_user on tb_termos.id_user = tb_user.id_user
                    WHERE tb_termos.`status` = $s
            ");

            try{
                $stmt->execute();
            } catch (Exception $e){
                echo $e;
            }

            if($s == 0){
                while($row = $stmt->fetch(PDO::FETCH_BOTH)){
                    echo("
                        <div class='req'>
                            <div class='info'>
                                <div class='desc'>
                                    <h2>".$row['nome']."</h2>
                                    <p>".$row['desc']."</p>
                                </div>
                            
                            
                                <div class='benca'>
                                    <a href='bencao.php?r=1&id=".$row['id']."'><div class='a'><img width='40px' src='img/aceitar.svg'/></div></a>
                                    <a href='bencao.php?r=2&id=".$row['id']."'><div class='r'><img width='40px' src='img/excluir.svg'/></div></a>
                                </div>

                            </div>

                            <div class='user'>
                                <h3> Enviado por: ".$row['nome_user']."</h3>
                            </div>
                        </div>
                    ");
                }
            
                  
                
            }else{
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

            }

        }

        function Permissao($r, $id){
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
                $st;
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