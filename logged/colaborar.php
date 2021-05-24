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

        <form action="cadastrar-termo.php?idUser=<?php echo $_SESSION['userId']; ?>" method="POST">

            <div class="form-group">
                <label for="user">Termo</label>
                <input maxlength="30" required type="text" name="termo" id="termo">
            </div>

            <div class="form-group">
                <label for="user">Descrição</label>
                <textarea maxlength="150" required placeholder="Descrição do termo" name="desc" cols="30" rows="10"  id="desc"></textarea>
            </div>

            <button type="submit">Enviar</button>

        </form>
    </div>
</body>
</html>