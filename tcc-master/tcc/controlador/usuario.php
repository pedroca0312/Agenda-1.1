<?php
require_once '../Models/CrudUsuario.php';
require_once '../Models/Usuario.php';

if (isset($_GET['acao'])){
    $acao = $_GET['acao'];
}else{
    $acao = 'verifica';
}

switch ($acao) {
    case 'verifica':

        $crud = new CrudUsuario();
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
    
        $crud = new CrudUsuario();

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

        $crud = new CrudUsuario();

        $crud->deletaUsuario($_GET['id']);

            header('Location: ../fullcalendar-3.9.0/index.php');

        break;

    case 'listar':
        $crud= new CrudUsuario();

        $usuarios= $crud->GetUsuarios();
        include '../views/lista_usuarios.php';

        break;

    case 'editar':

        $crud = new CrudUsuario();

        if(isset($_POST['edita'])) {
            $usuario = new Usuario($_POST['nome'],$_POST['email'],$_POST['senha'],$_POST['id_usuario'],$_POST['username']);

            $crud->editaUsuarios($usuario);

           header('Location: ../fullcalendar-3.9.0/index.php');
        }else{
            //$atividades = $crud->GetAtividades();


            $usuario = $crud->GetUsuario($_GET['id']);

            include '../views/editarUsuario.php';
        }


}