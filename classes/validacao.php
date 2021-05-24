<?php
    require'../logged/Classes/User.php';
    if(!empty($_POST) and ( empty($_POST['user']) or empty($_POST['senha']))){
        header("Location: ../index.html"); exit;
    }
    
    $n = $_POST['user'];
    $s = $_POST['senha'];

    $usuario = new User();
    $usuario->Logar($n,$s);
    
?>