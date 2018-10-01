<?php
/*

    Data de início:28/09
    Responsável: William Tristão de Paula
    Ultima modificação:28/09
    objetivo: controller da produtoLoja

*/

class controller_produtoLoja{

  public function BuscarPorID($id){
    $produtoLoja = new ProdutoLoja();
    return $produtoLoja = $produtoLoja::SelectById($id);
  }
}

?>
