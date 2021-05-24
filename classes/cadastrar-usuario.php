<?php
    require'../logged/Classes/User.php';

    $n = $_POST['user'];
    $e = $_POST['email'];
    $s = $_POST['senha'];

    $user = new User();
    $user->setName($n); 
    $user->setEmail($e);
    $user->setSenha($s);

    $user->Cadastrar($user);

    header("Location: ../login.php");
?>