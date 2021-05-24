<!DOCTYPE html>
<html lang="pt-br">
<head>

    <?php
        if(!empty($_GET)){
            $l = $_GET['l'];
            
            
            echo("<style>");
            echo $l == 0 ? "#l-in{display: inline-block;}" : "#l-in{display: inline-block;}";
            echo("</style>
            ");
        }
                    
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/login/main.css">
    <title>Login</title>
</head>
<body>
    <div class="form-div">
        <h1>Entre com sua conta</h1>

        <h2 id="l-in">Usuário ou senha inválido!</h2>

        <form action="./classes/validacao.php" method="POST">

            <div class="form-group">
                <label for="user">Usuário</label>
                <input required type="text" name="user" id="user">
            </div>

            <div class="form-group">
                <label for="user">Senha</label>
                <input type="password" name="senha" id="senha">
            </div>

            <a href="./cadastro.php">Não tem uma conta?</a>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>