<?php
    require_once'./logged/Classes/User.php';

    $name = (isset($_POST['u'])) ? $_POST['u'] : '';   
    $email = (isset($_POST['e'])) ? $_POST['e'] : '';

    $r = User::VerificarCadastro($name, $email);
    
    echo $r;
?>