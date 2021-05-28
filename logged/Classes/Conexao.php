<?php
    class Conexao{
        
        public static function Conectar(){
            [$servidor, $banco, $user, $senha] = ['localhost','bd_dicio','root',''];

            $conexao = new PDO("mysql:host=$servidor;
                                dbname=$banco",
                                $user,
                                $senha);

            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexao->exec("SET CHARACTER SET utf8");

            return $conexao;
        }

    }

?>