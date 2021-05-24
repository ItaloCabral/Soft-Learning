<!DOCTYPE html>
<?php include_once('./Classes/ValidaUser.php'); 
      include_once('./Classes/Termo.php');
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/perfil/main.css">
    <title>SoftLearning</title>
</head>
<body>

    <div class="side">

        <div onclick="abrirSide()" class="toggle-side">
            <i class="fas fa-bars"></i>
        </div>

        <div class="user">
            <h2><?php echo $_SESSION['userNome'] ?></h2>
            <h3><?php echo $_SESSION['userEmail'] ?></h3>
        </div>

        <div class="menu">
                <a href="#contribuicoes"> <img src="./img/Prancheta.svg" alt=""> Contribuições</a>
                <a href="#configuracoes"> <img src="./img/Configuracoes.svg" alt=""> Configurações</a>
                <a href="#suporte"> <img src="./img/Suporte.svg" alt=""> Suporte</a>
                <a href="logout.php"> <img src="./img/logout.svg" alt=""> Logout</a>
                <a href="index.php"> <img src="./img/Seta-Circular.svg" alt=""> Retornar à Home</a>
        </div>

    </div>

    <div class="main">
        <div id="contribuicoes">
            <h1>Suas contribuições para nosso site!</h1>

            <div class="deck">

                <?php
                    $termo = new Termo();
                    $termo->Contribuicoes($_SESSION['userId'])
                ?>

                <div class="card">
                    <h2 class="titulo">Contribuir</h2>
                    <h3 class="desc"><a href="colaborar.php">Clique aqui para fazer sua contribuição!</a></h3>
                </div>

            </div>
        </div>

        <div id="configuracoes">
            <h1>Configurações</h1>

            <div class="config">
                <div class="checkbox">
                    <input type="checkbox" name="theme" id="theme">
                    <div for="theme" class="switcher">
                        <div class="switch"></div>
                    </div>
                    <label for="theme">Night Mode</label>
                </div>

                <div class="user-edit">
                    <form action="editar-usuario.php" method="post">
                        <div class="form-group">

                            <input type="text" name="user" id="user">
                            <label for="user">Usuário</label>
                        </div>
                        <div class="form-group">

                            <input type="text" disabled name="email" id="email">
                            <label for="email">E-mail</label>
                        </div>
                        <div class="form-group">
                            <button type="submit">Mudar Nome</button>
                        </div>
                    </form>
                </div>

                <div class="conta">
                    <a onclick="abrirModal()">
                        <img src="./img/Lixeira.svg" alt="" />
                        Apagar conta
                    </a>
                </div>

                <div id="modal">
                    <div class="win">
                        <h2>Confirmar desativamento?</h2>
                        <hr>
                        <div class="op">
                            <a href="">Confirmar</a>
                            <a href="#configuracoes" onclick="abrirModal()">Cancelar</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div id="suporte">
            <h1>Suporte</h1>
        </div>
    </div>

    <script>
        function abrirModal(){
            const modal = document.querySelector('#modal');
            modal.classList.toggle('exibir')
        }

        function abrirSide(){
            const lateral = document.querySelector('.side');
            lateral.classList.toggle('side-open');

            const toggler = document.querySelector('.fas');
            toggler.classList.toggle('fa-times');
            toggler.classList.toggle('fa-bars');
        }
    </script>

</body>
</html>