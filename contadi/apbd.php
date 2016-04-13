<?php
	//INCLUDES
    include('bd.php');

    $banco = new banco;

    $query = "TRUNCATE parcela_empresa";
    $banco->executa($query);

    $query = "DELETE FROM `contadi`.`parcelas`";
    $banco->executa($query);

    $query = "TRUNCATE empresas";
    $banco->executa($query);

    $query = "DELETE FROM `contadi`.`sindicatos`";
    $banco->executa($query);

    $redirect = "index.php";
    header("location:$redirect");

?>