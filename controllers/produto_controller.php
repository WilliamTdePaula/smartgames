<?php
/*

    Data de início:26/09
    Responsável: William Tristão de Paula
    Ultima modificação:26/09
    objetivo: controller dos produto

*/

class controller_produto{

  public function BuscarDestaques(){
    $produto = new Produto();
    return $produto = $produto::SelectFeatured();
  }

  public function Buscar(){
    $produto = new Produto();
    return $produto = $produto::Select();
  }

  public function BuscarPorID($id){
    $produto = new Produto();
    return $produto = $produto::SelectById($id);
  }

  public function BuscarPorPesquisa($pesq){
    $produto = new Produto();
    return $produto = $produto::SelectBySearch($pesq);

  }
}

?>
