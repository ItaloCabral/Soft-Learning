<?php
    include'./Classes/Termo.php';

    session_start();

    $nome = $_POST['termo'];
    $desc = $_POST['desc'];
    $idUser = $_SESSION['userId'];

    $termo = new Termo();

    $termo->setName($nome);
    $termo->setDesc($desc);

    $termo->Cadastrar($termo, $idUser);

?>