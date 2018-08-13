<?php

require_once 'BDConection.php';
require_once "Atividade.php";

class CrudAtividade
{
    public $conexao;


    public function GetAtividade(){

        $this->conexao = BDConection::getConexao();

        $sql = "select * from atividade";

        $res = $this->conexao->query($sql);

        $at = [];

        $atividade= $res->fetch(PDO::FETCH_ASSOC);

        $at[] = new Atividade($atividade['id_atividade'],$atividade['descricao'],$atividade['data_cadastro'],$atividade['data_previsao'],$atividade['id_turma'],$atividade['id_disciplina']);

        return $at;

    }

    public function cadastroAgenda(Atividade $atividade){
        $this->conexao = BDConection::getConexao();

        $at[] = $atividade->getDescricao();
        $at[] = $atividade->getDataPrevisao();

    $sql = "insert into table atividade (descricao,data_previsao) values '".$at[0]."','".$at[1]."'";

        $res = $this->conexao->query($sql);
    }

}