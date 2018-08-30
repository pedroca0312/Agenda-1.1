<?php
require_once '../Models/CrudLogin.php';
require_once '../Models/Usuario.php';

if (isset($_GET['acao'])){
    $acao = $_GET['acao'];
}else{
    $acao = 'verifica';
}

switch ($acao) {
    case 'verifica':

        $crud = new CrudLogin();
        if (isset($_POST['gravar'])) {
            $usuarios = $crud->GetUsuarios();
            foreach ($usuarios as $usuario) {
                if ($_POST['usuario'] == $usuario->username and $_POST['senha'] == $usuario->senha) {
                    header('Location: ../fullcalendar-3.9.0/index.php');
                }
            }
        } else {

            include '../views/login.php';

        }
        break;

    case 'cadastrar':
    
        $crud = new CrudLogin();

        if (isset($_GET)){
            include '../views/cadastro.php';
        }
        if (isset($_POST['botao'])){
            $usuario = new Usuario($_POST['nome'],$_POST['email'],$_POST['senha'],Null,$_POST['usuario']);
        $crud->CadastrarUsuario($usuario);

        header('Location: usuario.php');
        }

        break;
    case 'deletar':

        $crud = new CrudAtividade();

        $crud->deletaAtividade($_GET['id']);

            header('Location: ../fullcalendar-3.9.0/index.php');

        break;

    case 'listar':
        $crud= new CrudAtividade();

        $atividades= $crud->GetAtividades();
        include '../views/lista_atividades.php';

        break;

    case 'editar':

        $crud = new CrudAtividade();

        if(isset($_POST['edita'])) {
            $atividade = new Atividade($_POST['id_atividade'], $_POST['descricao'], $_POST['data_previsao']);

            $crud->editaAtividade($atividade);

            header('Location: ../fullcalendar-3.9.0/index.php');
        }else{
            //$atividades = $crud->GetAtividades();


            $atividade = $crud->GetAtividade($_GET['id']);

            include '../views/editar.php';
        }


}