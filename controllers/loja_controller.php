<?php
/*

    Data de início:26/09
    Responsável: William Tristão de Paula
    Ultima modificação:26/09
    objetivo: controller das lojas

*/

class controller_loja{

  public function Buscar(){
    $loja = new Loja();
    return $loja = $loja::Select();
  }
}

?>
