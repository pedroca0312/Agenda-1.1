<?php
 require_once "../Models/CrudAtividade.php";

 $crud = new CrudAtividade();


$atividade = new Atividade(1,null,null);
 var_dump($crud->GetAtividade($atividade));