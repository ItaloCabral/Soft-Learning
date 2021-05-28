<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/cadastro/main.css">
    <title>Cadastre-se</title>
</head>
<body>
    <div class="form-div">
        <h1>Cadastre-se</h1>

        <form action="./classes/cadastrar-usuario.php" method="POST">

            <div class="form-group">
                <label id="lbl-user" for="user">Usuário <span id="uMsg">Nome já em uso :(</span></label>
                <input type="text" name="user" id="user">
            </div>
            
            <div class="form-group">
                <label id="lbl-email" for="email">E-mail <span id="eMsg">Email já em uso :(</span></label>
                <input type="text" name="email" id="email">
            </div>

            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha">
            </div>

            <a href="login.php">Já possui uma conta?</a>

            <button type="submit">Login</button>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./js/App.js"></script>
</body>
</html>