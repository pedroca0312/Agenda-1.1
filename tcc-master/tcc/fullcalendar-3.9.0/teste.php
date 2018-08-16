<?php

include "../Models/CrudAtividade.php";


$objetoAgenda = new CrudAtividade();
$at = new Atividade("prova","2018-08-14");
$objetoAgenda->cadastroAgenda($at);


