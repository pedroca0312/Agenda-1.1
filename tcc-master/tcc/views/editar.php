<html>
    <body>
    <form method="post" action="?acao=edita">

        <input type="text" value="<?= $atividade->getDescricao();?>">
        <br>
        <input type="text" value="<?= $atividade->getDataPrevisao();?>">

        <input type="submit">
        
    </form>
    </body>
</html>


