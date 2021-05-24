<?php
    include'./Classes/Termo.php';

    $nome = $_POST['termo'];
    $desc = $_POST['desc'];
    $idUser = $_GET['idUser'];

    $termo = new Termo();

    $termo->setName($nome);
    $termo->setDesc($desc);

    $termo->Cadastrar($termo, $idUser);

    header("Location: index.php");

?>