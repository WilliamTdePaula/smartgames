<?php

    require_once("../models/db_class.php");

    $sql = "SELECT * FROM tbl_produto;";

    $conex = new Mysql_db();

    $PDO_conex = $conex->Conectar();

    $select = $PDO_conex->query($sql);

    $listProdutos = array();

    while ($produtos = $select->fetch(PDO::FETCH_ASSOC)){
        $listProdutos[] = $produtos;
    }


    echo json_encode($listProdutos);
?>