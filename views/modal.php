<?php


		// Data de início:27/09
		// Responsável: William Tristão de Paula
		// Ultima modificação:27/09
		// objetivo: PROGRAMAÇÃO Da pagina de detalhes do produto


	$id = $_POST['id'];//pegando via post o id passado via ajax

	require_once("../models/produtoloja_class.php");
	require_once("../controllers/produtoLoja_controller.php");

	$controller_produtoLoja = new controller_produtoLoja();//Criando objeto
	$list = $controller_produtoLoja::BuscarPorID($id);//recebendo dados da busca


?>
<html>
	<head>
		<title> Teste Modal </title>
	</head>

	<script>
		$(document).ready(function() {

		  $(".fechar").click(function() {
		    //$(".modalContainer").fadeOut();
			$(".modalContainer").fadeOut();
		  });
		});

	</script>
<body>

	<div class="closeModalBTN">
		<a href = "#" class="fechar">
        <div id = "btnFechar">
            <img src="img/closeIcon.png" alt="">
        </div>
     </a>
	</div>

	<!--
	 ***OBS: todos os 4 primeiros list tem em seu indice 0,
	 por que indepedente do número do indice os valores serão os mesmos*****
 	-->
  <div class="caixaNomeProdutoDetalhe">
    <?php echo $list[0]->nome ?>
  </div>

  <div class="caixaPrincipalDetalhes">
    <div class="caixaFotoDetalhe">
			<img src="<?php echo $list[0]->imagem ?>" alt="" width="400px" height="500px" >
    </div>
    <div class="caixaDetalhesProduto">
			<div class="txtValorDetalhe">
				Por:
			</div>
      <div class="caixaValorDetalhe">
				R$<?php echo number_format($list[0]->valor, 2, ',', '.');?>
      </div>
      <div class="caixaTxtDetalhe">
				Detalhes: <?php echo $list[0]->detalhe ?>
      </div>
    </div>
  </div>

  <!-- Área localização -->
  <div class="caixaPrincipalLugaresProduto">
    <div class="tltLougaresProduto">
				Loja(s) com esse produto disponivel:
    </div>
		<?php
			 /********
			 A partir desse momento os valores do indice da variavel $list mudam,
			 portanto o indice deve ser mudado também
			 *******/
			$cont = 0;

			while ($cont < count($list)) {/*mudando o valor dos indices*/

		 ?>
		 <a href="views/mapa.php?lat=<?php echo $list[$cont]->lat?>&long=<?php echo $list[$cont]->long?>" target="_blank">
    <div class="caixaPrincipalDadosLugar">
      <div class="localizacaçãoProduto">
				<?php echo $list[$cont]->logradouro; ?>, <?php echo  $list[$cont]->bairro;?>, <?php echo  $list[$cont]->cidade;?> - <?php echo  $list[$cont]->estado;?>
      </div>
      <div class="estoqueProduto">
			  Estoque: <?php echo $list[$cont]->estoque; ?>
      </div>
    </div>
		</a>
		<?php
				$cont+=1;
			}
		 ?>

</body>
</html>
