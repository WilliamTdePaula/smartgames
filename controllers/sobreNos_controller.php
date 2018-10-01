<?php

/*

    Data de início:28/09
    Responsável: William Tristão de Paula
    Ultima modificação:28/09
    objetivo: controller do sobreNos

*/

class controller_sobreNos{

  public function Buscar(){
    $sobreNos = new SobreNos();
    return $sobreNos = $sobreNos::Select();
  }
}


 ?>
