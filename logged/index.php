<!DOCTYPE html>
<html lang="pt-br">
    <?php include_once('./Classes/ValidaUser.php');
    ?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" href="./css/index/main.css">
        <title>Soft Learning</title>
    </head>
    <body>
        <header>
            <div class="logo">
                <a href="index.html">
                    <img src="./img/Logo.png" width="100px" alt="Soft Learning">
                </a>
            </div>

            <div class="search">
                <form>
                    <input type="text" name="busca" id="busca" placeholder="Pesquisar">
                </form>
            </div>

            <div class="login">
                
                <div class="dropdown">
                
                    <button class="dropbtn"><?php echo $_SESSION['userNome'] ?> ▼</button>
                    <div class="dropdown-content">
                    <?php echo $_SESSION['userNivel'] > 1 
                            ? "<a id='admPage' href='adm.php'>Painel</a>" 
                                : "<a id='admPage' href='perfil.php#contribuicoes'>Perfil</a>"; ?>
                        <a href="./logout.php">Logout</a>
                    </div>
                </div> 
                
            </div>
        </header>

        <section>
            <div class="card-deck">
    
                <?php
                     require_once("./Classes/Termo.php");
                     Termo::Listar(1);
    
                ?>
                  
            </div>
            
            <footer>
                <div class="content">
    
                    <img src="./img/Logo.png" width="100px" height="100px" alt="">
    
                    <div class="suporte">
    
                        <h2>Suporte</h2>
    
                            <a href="#">Fale conosco</a>
                            <a href="#">Perguntas frequentes</a>
                            <a href="#">Reporte um erro</a>                    
    
                    </div>
    
                    <div class="social">
    
                        <h2>Siga-nos</h2>
    
                        <a href="">Blog</a>
                        <a href="">Facebook</a>
                        <a href="">Twitter</a>
                        <a href="">Trello</a>
                        
                    </div>
                </div>
    
                <div class="copyright">
                    <p>
                        Feito com 
                        <svg aria-labelledby="svg-inline--fa-title-PgFHnFjBo9sz" data-prefix="fas" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-heart fa-w-16"><title id="svg-inline--fa-title-PgFHnFjBo9sz" class="">love</title><path fill="currentColor" d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z" class=""></path></svg>
                        (e café) em São Paulo.
                    </p>
                    <p>©SoftLearning 2021 | Todos os direitos reservados</p>
                </div>
                
            </footer>
        </section>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="./js/App.js"></script>

    </body>

</html>