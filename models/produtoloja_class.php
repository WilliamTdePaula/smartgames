<?php

/*

Data de início:26/09
Responsável: William Tristão de Paula
Ultima modificação:27/09
objetivo: Classe do produtoloja(tbl de relacionamento)

*/

class ProdutoLoja{
  public $idProduto;
  public $nome;
  public $imagem;
  public $valor;
  public $detalhe;
  public $idLoja;
  public $cidade;
  public $estado;
  public $logradouro;
  public $bairro;
  public $lat;
  public $long;
  public $estoque;

  public function __construct(){
    require_once('db_class.php');
  }


  public function SelectById($id){
    $sql = "SELECT * FROM tbl_produtoloja
    INNER JOIN tbl_produto ON tbl_produto.idProduto = tbl_produtoloja.idProduto
    INNER JOIN tbl_loja ON tbl_loja.idLoja = tbl_produtoloja.idLoja where $id = tbl_produtoloja.idProduto;";

    $conex = new Mysql_db();

    $PDO_conex = $conex->Conectar();

    $select = $PDO_conex->query($sql);

    $cont = 0;
    while ($rs=$select->fetch(PDO::FETCH_ASSOC)) {
      $listProdutoLoja[] = new ProdutoLoja();

      $listProdutoLoja[$cont]->idProduto = $rs['idProduto'];
      $listProdutoLoja[$cont]->nome = $rs['nome'];
      $listProdutoLoja[$cont]->imagem = $rs['imagem'];
      $listProdutoLoja[$cont]->valor = $rs['valor'];
      $listProdutoLoja[$cont]->detalhe = $rs['detalhe'];
      $listProdutoLoja[$cont]->idLoja = $rs['idLoja'];
      $listProdutoLoja[$cont]->cidade = $rs['cidade'];
      $listProdutoLoja[$cont]->estado = $rs['estado'];
      $listProdutoLoja[$cont]->logradouro = $rs['logradouro'];
      $listProdutoLoja[$cont]->bairro = $rs['bairro'];
      $listProdutoLoja[$cont]->lat = $rs['lat'];
      $listProdutoLoja[$cont]->long = $rs['long'];
      $listProdutoLoja[$cont]->estoque = $rs['estoque'];
      $cont+=1;
    }
    $conex->Desconectar();

    if(isset($listProdutoLoja))
      return $listProdutoLoja;
  }
}


 ?>
