<?php
    $id = $_POST['idProduto'];

    require_once("../models/db_class.php");

    $sql = "SELECT * FROM tbl_produto where idProduto = $id;";

    $conex = new Mysql_db();

    $PDO_conex = $conex ->Conectar();

    $select = $PDO_conex->query($sql);

    $listProduto = array();

    while($Produto = $select->fetch(PDO::FETCH_ASSOC)){
        $listProduto[] = $Produto;
    }

    echo json_encode($listProduto);
?>