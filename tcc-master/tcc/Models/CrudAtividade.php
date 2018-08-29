<?php

require_once __DIR__."/BDConection.php";
require_once __DIR__."/Atividade.php";

class CrudAtividade
{
    public $conexao;


    public function GetAtividades(){

        $this->conexao = BDConection::getConexao();

        $sql = "select * from atividade";

        $res = $this->conexao->query($sql);

        $at = [];

        $atividades= $res->fetchAll(PDO::FETCH_ASSOC);


        foreach ($atividades as $atividade) {
            $at[] = new Atividade($atividade['id_atividade'],$atividade['descricao'], $atividade['data_previsao']);
        }
        return $at;

    }

    public function GetAtividade($id){

        $this->conexao = BDConection::getConexao();

        $sql = "select * from atividade where id_atividade=".$id;

        $res = $this->conexao->query($sql);

        $atividade= $res->fetch(PDO::FETCH_ASSOC);


        $at = new Atividade($atividade['id_atividade'],$atividade['descricao'], $atividade['data_previsao']);
        return $at;

    }

    public function cadastroAgenda(Atividade $atividade){
        $this->conexao = BDConection::getConexao();

        $at[] = $atividade->getDescricao();
        $at[] = $atividade->getDataPrevisao();

    $sql = "insert into atividade (descricao,data_previsao) values ('".$at[0]."','".$at[1]."')";

        $res = $this->conexao->query($sql);
    }

    public function deletaAtividade(Atividade $atividade){

        $this->conexao = BDConection::getConexao();

        $at[] = $atividade->getIdAtividade();

        $sql = "delete from atividade where id_atividade=".$at[0];

        $res = $this->conexao->query($sql);
    }

    public function editaAtividade(Atividade $atividade){

        $this->conexao = BDConection::getConexao();

        $at[] = $atividade->getIdAtividade();
        $at[] = $atividade->getDescricao();
        $at[] = $atividade->getDataPrevisao();

        $sql = "update atividade set descricao='".$at[1]."',data_previsao='".$at[1]."' where id_atividade='".$at[0]."'";

        $res = $this->conexao->query($sql);
    }

}