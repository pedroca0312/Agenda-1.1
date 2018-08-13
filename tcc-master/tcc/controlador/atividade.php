<?php

    require_once '../Models/CrudAtividade.php';
    require_once '../Models/Atividade.php';


    $crud = new CrudAtividade();

    include '../fullcalendar-3.9.0/index.php';

    if(isset($_POST['botao'])){
        $atividade = new Atividade($_POST['descricao'],$_POST['data_previsao']);
    $crud->cadastroAgenda($atividade);

    header('Location: ../fullcalendar-3.9.0/index.php');
   
    }




