<?php

/*

Data de início:26/09
Responsável: William Tristão de Paula
Ultima modificação:27/09
objetivo: Classe do sobre nos(caso no futuro o cliente queira um cms)

*/

class SobreNos{
  public $id_sobreNos;
  public $txtSobreNos;
  public $txtNossoProposito;
  public $telefone;
  public $email;

  public function __construct(){
    require_once('db_class.php');
  }

  public function Select(){
    $sql = "SELECT * FROM tbl_empresa LIMIT 1;";

    $conex = new Mysql_db();

    $PDO_conex = $conex->Conectar();

    $select = $PDO_conex->query($sql);

    if ($rs=$select->fetch(PDO::FETCH_ASSOC)) {
      $listSobreNos = new SobreNos();

      $listSobreNos->id_sobreNos = $rs['id_sobrenos'];
      $listSobreNos->txtSobreNos = $rs['txtSobreNos'];
      $listSobreNos->txtNossoProposito = $rs['txtNossoProposito'];
      $listSobreNos->telefone = $rs['telefone'];
      $listSobreNos->email = $rs['email'];
    }

    $conex->Desconectar();

    if(isset($listSobreNos))
      return $listSobreNos;

  }
}



 ?>
