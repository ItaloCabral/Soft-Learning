<?php
    session_start();

    $_SESSION['userNome'] = '';
    $_SESSION['userId'] = '';
    $_SESSION['userNivel'] = '';

    session_destroy();

    header("Location: ../index.php");

?>