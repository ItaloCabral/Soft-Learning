<?php
    // require_once'./logged/Classes/Conexao.php';

    // $conexao = Conexao::Conectar();

    // $n = 'Italo';
    // $e = 'teste';

    // $stmt = $conexao->prepare("select `nome_user`, `email_user` from tb_user
    //                                     where(nome_user like binary '$n')
    //                                      or (email_user like binary '$e') limit 1");

    // try {
    //     $stmt->execute();
    // } catch (PDOException $e) {
    //     echo $e->getMessage();
    // }

    // $row = $stmt->fetch(PDO::FETCH_ASSOC);
    // if(!$row){
    //     echo $row;
    // }else{ echo count($row); }

    // echo "<a href='verificar-user.php'>AAAa</a>";
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <input type="text" id="user" name="user">
        <input type="text" id="email" name="email">
    </form>

    <div class="nhe">
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./js/App.js"></script>
</body>
</html>