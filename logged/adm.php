<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/adm/main.css">
    <title>Painel do ADM</title>
</head>
<body>
    <header>
        <a class="voltar" href="index.php">
            <img src='./img/down-arrow.svg' alt=''>
        </a>
    </header>

    <section class="card-deck">
        <?php
            include("./Classes/Termo.php");
            require_once'./Classes/ValidaADM.php';

            Termo::Listar(0);  
        ?>  
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/App.js"></script>
</body> 

</html> 
