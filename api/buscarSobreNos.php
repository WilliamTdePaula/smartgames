<?php

    require_once("../models/db_class.php");

    $sql = "SELECT * FROM tbl_empresa LIMIT 1;";

    $conex = new Mysql_db();

    $PDO_conex = $conex->Conectar();

    $select = $PDO_conex->query($sql);

    $listSobreNos = array();

    while ($SobreNos= $select->fetch(PDO::FETCH_ASSOC)){
        $listSobreNos[] = $SobreNos;
    }


    echo json_encode($listSobreNos);
?>