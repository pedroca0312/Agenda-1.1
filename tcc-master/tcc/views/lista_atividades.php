<?php
    require_once __DIR__."/../Models/Atividade.php";

    /*
        fazer a lista


      <ul>
       <?php foreach ($categorias as $categoria): ?>
        <li id="<?=$categoria->getId();?>"><?=$categoria->getNome();?></li>
        <?php endforeach;?>
    </ul>
     */

?>

<html>
    <body>
        <form action="" method="post">

            <input type="text" name="descricao" value="<?php $atividade->getDescricao(); ?>">


        </form>

    </body>
</html>