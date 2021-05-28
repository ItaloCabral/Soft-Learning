<!DOCTYPE html>
<?php require'./Classes/ValidaUser.php'; ?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/login/main.css">
    <title>Adicione um termo</title>
</head>
<body>
    <div class="form-div">
        <a class="voltar" href="index.php"><</a>

        <h1>Colaborar com um termo</h1>

        <form>

            <div class="form-group">
                <label for="user">Termo</label>
                <input maxlength="30" required type="text" name="termo" id="termo">
            </div>
            
            <div class="form-group">
                <label for="user">Descrição</label>
                <textarea maxlength="150" required placeholder="Descrição do termo" name="desc" cols="30" rows="10"  id="desc"></textarea>
            </div>

            <button id="enviar" type="submit">Enviar</button>

        </form>
    </div>

    <div class="msg">
        <p>Contribuição feita!</p>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./js/App.js"></script>
</body>
</html>