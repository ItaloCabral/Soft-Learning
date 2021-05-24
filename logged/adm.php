<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/adm/main.css">
    <title>Painel do ADM</title>
</head>
<body> 
    <?php
         include("./Classes/Termo.php");

         $termo = new Termo();
         $termo->Listar(0);  
    ?>  
</body> 

</html> 
