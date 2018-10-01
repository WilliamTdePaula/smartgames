<?php
/*

    Data de início:26/09
    Responsável: William Tristão de Paula
    Ultima modificação:28/09
    objetivo: objeto e os métodos do produto

*/
class Produto{
  public $idProduto;
  public $nome;
  public $imagem;
  public $valor;
  public $detalhe;
  public $destaque;

  public function __construct(){
    require_once('db_class.php');
  }

  public function SelectFeatured(){//BUSCAR APENAS JOGOS EM DESTAQUE
    $sql = "SELECT * FROM tbl_produto WHERE destaque = 1 ORDER BY RAND();";/*SELECT RANDOMICO*/

    $conex = new Mysql_db();

    $PDO_conex = $conex->Conectar();

    $select = $PDO_conex->query($sql);

    $cont = 0;
    while ($rs=$select->fetch(PDO::FETCH_ASSOC)) {
      $listProduto[] = new Produto();

      $listProduto[$cont]->idProduto = $rs['idProduto'];
      $listProduto[$cont]->nome = $rs['nome'];
      $listProduto[$cont]->imagem = $rs['imagem'];
      $listProduto[$cont]->valor = $rs['valor'];
      $listProduto[$cont]->detalhe = $rs['detalhe'];
      $listProduto[$cont]->destaque = $rs['destaque'];
      $cont+=1;
    }
    $conex->Desconectar();

    if(isset($listProduto))
      return $listProduto;
  }

  public function Select(){//BUSCAR JOGOS QUE NÃO ESTÃO EM DESTAQUE
    $sql = "SELECT * FROM tbl_produto WHERE destaque = 0 ORDER BY RAND();";/*SELECT RANDOMICO*/

    $conex = new Mysql_db();

    $PDO_conex = $conex->Conectar();

    $select = $PDO_conex->query($sql);

    $cont = 0;
    while ($rs=$select->fetch(PDO::FETCH_ASSOC)) {
      $listProduto[] = new Produto();

      $listProduto[$cont]->idProduto = $rs['idProduto'];
      $listProduto[$cont]->nome = $rs['nome'];
      $listProduto[$cont]->imagem = $rs['imagem'];
      $listProduto[$cont]->valor = $rs['valor'];
      $listProduto[$cont]->detalhe = $rs['detalhe'];
      $listProduto[$cont]->destaque = $rs['destaque'];
      $cont+=1;
    }
    $conex->Desconectar();

    if(isset($listProduto))
      return $listProduto;
  }

  public function SelectBySearch($pesq){
    $sql = "SELECT * FROM tbl_produto WHERE nome LIKE '%b%';";

    $conex = new Mysql_db();

    $PDO_conex = $conex->Conectar();

    $select = $PDO_conex->query($sql);

    $cont = 0;
    while ($rs=$select->fetch(PDO::FETCH_ASSOC)) {
      $listProduto[] = new Produto();

      $listProduto[$cont]->idProduto = $rs['idProduto'];
      $listProduto[$cont]->nome = $rs['nome'];
      $listProduto[$cont]->imagem = $rs['imagem'];
      $listProduto[$cont]->valor = $rs['valor'];
      $listProduto[$cont]->detalhe = $rs['detalhe'];
      $cont+=1;
    }
    $conex->Desconectar();

    if(isset($listProduto))
      return $listProduto;
  }


}


 ?>
