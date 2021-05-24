<?php
    if(!isset($_SESSION)) session_start();

    $nivel_necessario = 2;

    if(!isset($_SESSION['userId']) or ($_SESSION['userNivel'] < $nivel_necessario)){
        session_destroy();
        header("Location: ../index.html");
    }

?>