<?php
    require'../logged/Classes/Conexao.php';

    $conexao = Conexao::Conectar();

    $stmt = $conexao->prepare("select * from tb_termos");

    $arrayTermos = array();

    try {
        $stmt->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $arrayTermos[] = $row;
    }

    echo '{ "termos": '.json_encode($arrayTermos, JSON_UNESCAPED_UNICODE).'}';
    
?>