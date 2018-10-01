<?php

/*

    Data de início:26/09
    Responsável: William Tristão de Paula
    Ultima modificação:29/09
    objetivo: objeto e os métodos da loja

*/

  class Loja{
    public $idLoja;
    public $cidade;
    public $estado;
    public $logradouro;
    public $bairro;
    public $lat;
    public $long;

    public function __construct(){
      require_once('db_class.php');
    }

    public function Select(){
      $sql = "SELECT * FROM tbl_loja";

      $conex = new Mysql_db();

      $PDO_conex = $conex->Conectar();

      $select = $PDO_conex->query($sql);

      $cont = 0;
      while ($rs=$select->fetch(PDO::FETCH_ASSOC)) {
        $listLoja[] = new Loja();

        $listLoja[$cont]->idLoja = $rs['idLoja'];
        $listLoja[$cont]->cidade = $rs['cidade'];
        $listLoja[$cont]->estado = $rs['estado'];
        $listLoja[$cont]->logradouro = $rs['logradouro'];
        $listLoja[$cont]->bairro = $rs['bairro'];
        $listLoja[$cont]->lat = $rs['lat'];
        $listLoja[$cont]->long = $rs['long'];
        $cont+=1;
      }
      $conex->Desconectar();

      if(isset($listLoja))
        return $listLoja;

    }
  }


 ?>
