<?php


		// Data de início:28/09
		// Responsável: William Tristão de Paula
		// Ultima modificação:28/09
		// objetivo: PROGRAMAÇÃO Da pagina de sobre nós

	 require_once("../models/loja_class.php");
	 require_once("../controllers/loja_controller.php");
	 require_once("../models/sobrenos_class.php");
	 require_once("../controllers/sobrenos_controller.php");

	 /*Criando obejto para o sobrenos*/
	 $controller_sobreNos = new controller_sobreNos();
	 $listT = $controller_sobreNos::Buscar();

?>

<div class="tltSobreNos">
  SOBRE NÓS
</div>

<div class="txtSobreNos">

  <?php
				echo $listT->txtSobreNos;
	  ?>
</div>

<div class="tltSobreNos">
  NOSSO PROPÓSITO
</div>

<div class="txtSobreNos">
	<?php
				echo $listT->txtNossoProposito;
		?>
</div>

<div class="tltSobreNos">
  FORMAS DE CONTATO
</div>

<div class="caixaContato">
	<div class="imgContatos">
		<div class="divisaoContato">
			<img src="img/ic_tel.png" alt="">
		</div>
		<div class="divisaoContato">
			<?php
						echo $listT->telefone;
				?>
		</div>
	</div>

	<div class="imgContatos">
		<div class="divisaoContato">
			<img src="img/ic_em.png" alt="">
		</div>
		<div class="divisaoContato">
			<?php
						echo $listT->email;
				?>
		</div>
	</div>
</div>


<div class="clear">

</div>

<div class="tltSobreNos">
  ONDE ESTAMOS
</div>

<?php
  $controller_loja = new controller_Loja();//Criando objeto
  $list = $controller_loja::Buscar();//recebendo dados da busca

  $cont=0;

  while ($cont < count($list)) {
    ?>
    <a href="views/mapa.php?lat=<?php echo $list[$cont]->lat?>&long=<?php echo $list[$cont]->long?>" target="_blank">
      <div class="locaisDetalhes">
        <?php echo $list[$cont]->logradouro; ?>, <?php echo  $list[$cont]->bairro;?>, <?php echo  $list[$cont]->cidade;?> - <?php echo  $list[$cont]->estado;?>
      </div>
    </a>
    <?php $cont+=1; }?>



<div class="clear">

</div>
