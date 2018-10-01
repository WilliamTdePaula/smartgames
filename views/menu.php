<?php



require_once("controllers/produto_controller.php");
require_once("models/produto_class.php");

$pesquisa = "";

if(isset($btnPesquisar)){
  $pesquisa = $_POST['txtBarraPesquisa'];



}

 ?>

<html>
    <!--
        Data de início:26/09
        Responsável: William Tristão de Paula
        Ultima modificação:27/09
        objetivo: Arquivo que irá conter o menu das páginas
    -->
    <head>
       <title>SmartGamesLtd. Início</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta name="viewport" content="width=device-width,initial-scale=1"/>
        <script type="text/javascript" src="javascript/jquery.js"></script>
        <script>
            $(document).ready(function() {

              $(".ver").click(function() {
                $(".modalContainer").slideToggle();
                //slideToggle
                //toggle
                //FadeIn
              });
            });

            function Modal(idIten){
                $.ajax({
                    type: "POST",
                    url: "views/modal.php",
                    data: {id:idIten},
                    success: function(dados){
                        $('.modal').html(dados);
                    }
                });
            }
            function paginaInicialPesquisa(){/*recarregar pagina inicial*/
	             window.location.replace('http://localhost/smartgames?rs');
            }
            function paginaInicial(){/*recarregar pagina inicial*/
	             window.location.replace('http://localhost/smartgames');
            }
        </script>

        <script type="text/javascript">

           $(document).ready(function() {
           //pagina de duvidas frequentes
             $("#opcSobre").click(function(){
               $.ajax({
                 type:"POST",
                 url:"views/sobreNos.php",
                 data:{},
                 success: function(dados){
                   $("#main").html(dados);
                 }
               });
             });
           });

           $(document).ready(function() {
           //pagina de duvidas frequentes
             $("#opcSobreMap").click(function(){
               $.ajax({
                 type:"POST",
                 url:"views/sobreNos.php",
                 data:{},
                 success: function(dados){
                   $("#main").html(dados);
                 }
               });
             });
           });


        </script>
    </head>
    <body>
      <div class="modalContainer">
            <div class="modal">

            </div>
        </div>
        <!-- Menu -->
        <header>
            <div class="caixaMenuSuperior">

              <div class="caixaLogo" onclick="paginaInicial()">
                <img src="img/logo2.png" width="250px" height="60px" alt="">
              </div>
              <nav>
                <div class="opcMenu" onclick="paginaInicial()">
                  Início
                </div>
                <div class="opcMenu" id='opcSobre'>
                  Sobre Nós
                </div>
              <!-- divisão de menu -->
              </nav>
                <!--<form name="frmSearch" class="" action="index.php" method="post">
                    <div class="caixaBarraPesquisa">
                      <input type="text" name="txtBarraPesquisa" value="" placeholder="asdasd">
                    </div>
                    <div class="caixaBtnPesquisa">
                      <input type="submit" name="btnPesquisar" value="Buscar">
                    </div>
                    <div id="divBusca">
                      <input type="text" id="txtBusca" placeholder="Buscar..."/>
                      <img src="img/search.png" id="btnBusca" alt="Buscar" width="40px" height="40px" alt=""/>
                    </div>

                </form>-->
              </div>
              <!-- fim menu -->
            <div class="caixaMenuInferior">

            </div>

        </header>

        <!-- área conteúdo -->
        <main>
          <div class="espacoMenu">

          </div>
          <div id="main">
            <?php require_once("views/home.php") ?>
          </div>
        </main>

        <!--  área footer-->
        <footer>
          <div class="caixaFooter">
            <div class="caixaLogoFooter">
              <img src="img/logo2.png" width="250px" height="70px" alt="">
            </div>
            <div class="caixaMapSite">
              <div class="caixaTituloMap">
                Mapa do Site
              </div>
              <div class="caixaItensMap" onclick="paginaInicial()">
                Início
              </div>
              <div class="caixaItensMap" id='opcSobreMap'>
                Sobre nós
              </div>
            </div>
            <div class="caixaRedesSociais">
              <div class="caixaTituloFooter">
                Nos acompanhe nas redes sociais
              </div>
              <div class="caixaFotosRede">
                <div class="caixaOpcRede">
                  <img src="img/face.png" alt="">
                </div>
                <div class="caixaOpcRede">
                  <img src="img/insta.png" alt="">
                </div>
                <div class="caixaOpcRede">
                  <img src="img/twitter.png" alt="">
                </div>
              </div>
            </div>


          </div>
        </footer>

    </body>
</html>
