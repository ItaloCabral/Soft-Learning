<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" href="./css/index/main.css">
        <title>Soft Learning</title>
    </head>
    <body>
        <header>
            <a href="index.html">
                <img src="./img/Logo.png" width="100px" alt="Soft Learning">
            </a>

            <div class="search">
                <form action="">
                    <input type="text" name="busca" id="busca" placeholder="Pesquisar">
                    <input type="submit" value="&#xf002;" />
                </form>
            </div>

            <div class="login">
                <a href="./login.php">Faça Login</a>
                <a href="./cadastro.php">Ou cadastre-se!</a>
            </div>
        </header>

        <div class="search-collapse">
            <div class="search">
                <form action="">
                    <input type="text" name="busca" id="busca" placeholder="Pesquisar">
                    <input type="submit" value="&#xf002;" />
                </form>
            </div>
        </div>

        <div class="card-deck">

          <?php
                include("./logged/Classes/Termo.php");

                $termo = new Termo();
                $termo->Listar(1);
          ?>
    <a href="./login.html">
      <div class="flip-card" tabIndex="0">
          <div class="flip-card-inner">

            <div class="flip-card-front">
              <h3 style="font-size: 3rem">+</h3>
            </div>

            <div class="flip-card-back">
              <h3>Sentiu falta de algum termo? Contribua para nosso site!</h3>
            </div>
            
          </div>
      </div>
    </a>  

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


        <script src="./js/App.js"></script>
    </body>

</html>