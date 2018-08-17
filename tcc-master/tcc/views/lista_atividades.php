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
    <table>
        <thead>
        <tr>
            <th scope="col">Atividade</th>
        </tr>

        </thead>

        <tr>
            <?php foreach ($atividades as $atividade): ?>

                <?php foreach ($atividades as $atividade): ?>
            <th><?= $atividade->getDescricao();?> <button id="<?= $atividade->getIdAtividade();?>">editar</button>
                <br></th>

                <?php endforeach;?>

            <?php endforeach;?>



        </tr>
    </table>

    </body>
</html>