<?php

    require_once("../models/db_class.php");

    $sql = "SELECT * FROM tbl_loja";

    $conex = new Mysql_db();

    $PDO_conex = $conex->Conectar();

    $select = $PDO_conex->query($sql);

    $listLojas = array();

    while ($lojasId = $select->fetch(PDO::FETCH_ASSOC)){
        $listLojas[] = $lojasId;
    }


    echo json_encode($listLojas);
?>