<?php
    require'Classes/Termo.php';

    $r = $_GET['r'];
    $id = $_GET['id'];

    $termo = new Termo();
    $termo->Permissao($r, $id);

    header("Location: adm.php")

?>