<?php

    require_once __DIR__."/../Models/CrudAtividade.php";

    $crud = new CrudAtividade();

    include '../views/cadastro_atividade.php';

    if(isset($_POST['botao'])){
        $atividade = new Atividade($_POST['descricao'],$_POST['data_previsao']);
    $crud->cadastroAgenda($atividade);

    header('Location: ../fullcalendar-3.9.0/index.php');
   
    }




