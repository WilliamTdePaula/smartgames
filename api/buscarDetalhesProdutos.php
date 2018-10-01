<?php
    $id = $_POST['idProduto'];

    require_once("../models/db_class.php");

    $sql = "SELECT * FROM tbl_produtoloja
    INNER JOIN tbl_produto ON tbl_produto.idProduto = tbl_produtoloja.idProduto
    INNER JOIN tbl_loja ON tbl_loja.idLoja = tbl_produtoloja.idLoja where $id = tbl_produtoloja.idProduto;";

    $conex = new Mysql_db();

    $PDO_conex = $conex ->Conectar();

    $select = $PDO_conex->query($sql);

    $listDetalhesProduto = array();

    while($detalhesProduto = $select->fetch(PDO::FETCH_ASSOC)){
        $listDetalhesProduto[] = $detalhesProduto;
    }

    echo json_encode($listDetalhesProduto);
?>