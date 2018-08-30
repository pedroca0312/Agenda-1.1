<html>
    <body>
    <form method="post" action="">

        <input name="descricao" type="text" value="<?= $atividade->getDescricao();?>">
        <br>
        <input name="data_previsao" type="text" value="<?= $atividade->getDataPrevisao();?>">
        <input name="id_atividade" type="hidden" value="<?= $atividade->getIdAtividade();?>">

        <a href="../controlador/atividade.php?acao=editar"><button type="submit" name="edita" class="btn btn-primary btn-lg">Editar</button></a>

    </form>
    </body>
</html>


