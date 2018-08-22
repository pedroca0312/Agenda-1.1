<?php


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



                <?php foreach ($atividades as $atividade): ?>


                <ul>
                    <li> <p><?= $atividade->getDescricao();?>        <a href="../views/editar.php?acao=editar&id=<?= $atividade->getIdAtividade();?>"><button id="">editar</button></a></p></li>
                </ul>
                <?php endforeach;?>








    </body>
</html>