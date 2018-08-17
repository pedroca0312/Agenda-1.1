
<?php

    include "../Models/BDConection.php";

	$conexao = BDConection::getConexao();

	$consulta = $conexao->query("SELECT * FROM atividade");

	$eventos =  $consulta->fetchAll(PDO::FETCH_ASSOC);

	$listaEventos = [];

	foreach ($eventos as $evento){

        $eventoFormatado = [
            "title" => $evento['descricao'],
            "start" => date($evento['data_previsao']),

        ];

        $listaEventos[] = $eventoFormatado;

	}


	$listaEventos[] = $evento;
	var_dump($listaEventos);

    echo json_encode($listaEventos);


