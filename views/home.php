
<!--
     Data de início:26/09
    Responsável: William Tristão de Paula
    Ultima modificação:27/09
    objetivo: html da página home
 -->


<!-- Área do banner -->

<div class="banner">
    <img src="img/banner.jpg" alt="" class="bannerBox">
</div>
<div class="txtBanner">
  DOS MELHORES PARA OS MELHORES
</div>

<!--  Área do conteúdo-->
<div class="imgFundoConteudo">
  <img src="img/imagemDeFundo.png" alt="">
</div>
<div class="tituloConteudo">
  JOGOS DESTAQUE
</div>

<div class="caixaMaiorProdutos">
  <div class="caixaProdutos">
    <?php

      $controller_produto = new controller_produto();
      $list = $controller_produto::BuscarDestaques();

      $cont = 0;

      while($cont < count($list)){

     ?>
    <a class="ver" href="#" onclick="Modal(<?php echo $list[$cont]->idProduto ?>)">
      <div class="caixaOpcProduto">
          <div class="caixaImgProduto">
            <img src="<?php echo $list[$cont]->imagem; ?>" alt="">
          </div>
          <div class="caixaDetalheProduto">
            <div class="nomeJogo">
              <?php echo $list[$cont]->nome; ?>
            </div>
            <div class="caixaValorProduto">
              Valor: R$<?php echo number_format($list[$cont]->valor, 2, ',', '.'); ?>
            </div>
            <a href="#">

            </a>
            <div class="caixaDetalhes">

                  Clique para mais detalhes

            </div>
          </div>
        </div>
      </a>

  <?php $cont+=1;} ?>
  </div>

  <div class="imgFundoConteudo">
    <img src="img/imagemDeFundo.png" alt="">
  </div>
  <div class="tituloConteudo">
    NOSSOS OUTROS JOGOS
  </div>

  <div class="caixaMaiorProdutos">
    <div class="caixaProdutos">
      <?php

        $controller_produto = new controller_produto();
        $list = $controller_produto::Buscar();

        $cont = 0;

        while($cont < count($list)){

       ?>
      <a class="ver" href="#" onclick="Modal(<?php echo $list[$cont]->idProduto ?>)">
        <div class="caixaOpcProduto">
            <div class="caixaImgProduto">
              <img src="<?php echo $list[$cont]->imagem; ?>" alt="">
            </div>
            <div class="caixaDetalheProduto">
              <div class="nomeJogo">
                <?php echo $list[$cont]->nome; ?>
              </div>
              <div class="caixaValorProduto">
                Valor: R$<?php echo number_format($list[$cont]->valor, 2, ',', '.'); ?>
              </div>
              <a href="#">

              </a>
              <div class="caixaDetalhes">

                    Clique para mais detalhes

              </div>
            </div>
          </div>
        </a>

    <?php $cont+=1;} ?>
    </div>
</div>
