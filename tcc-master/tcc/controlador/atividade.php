<?php

    require_once __DIR__."/../Models/CrudAtividade.php";

  /*  if(isset($_GET['acao'])){
      
    }else{
        $acao='cadastrar';
    }
*/
    $acao=$_GET['acao'];

    switch ($acao) {

        case 'cadastrar':

            $crud = new CrudAtividade();

            if (isset($_POST['botao'])) {
            $atividade = new Atividade(null,$_POST['descricao'], $_POST['data_previsao']);
            $crud->cadastroAgenda($atividade);

            header('Location: ../fullcalendar-3.9.0/index.php');

        }else{
                include '../views/cadastro_atividade.php';
            }
        break;

        case 'deletar':

        $crud = new CrudAtividade();

        if (isset($_POST['deleta'])){
            $atividade = new Atividade($_POST['id_atividade'],null,null);
            $crud->deletaAtividade($atividade);

            header('Location: ../fullcalendar-3.9.0/index.php');
        }else{
            include '../views/deletar.php';
        }
        break;

        case 'editar':

            $crud = new CrudAtividade();

            if(isset($_POST['edita'])) {
                $atividade = new Atividade($_POST['id_atividade'], $_POST['descricao'], $_POST['data_previsao']);

                $crud->editaAtvidade($atividade);

                header('Location: ../fullcalendar-3.9.0/index.php');
            }

    }




