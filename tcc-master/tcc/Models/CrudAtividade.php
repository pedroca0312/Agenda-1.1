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

        $at[] = $atividade->getIdAtividade();
        $at[] = $atividade->getDescricao();
        $at[] = $atividade->getDataCadastro();
        $at[] = $atividade->getDataPrevisao();
        $at[] = $atividade->getIdTurma();
        $at[] = $atividade->getIdDisciplina();

        $sql = "SELECT * FROM  atividade";

    }

    public function carregaAtividade() {
        $sql = "SELECT * FROM  atividade";
    }

    public function insereAtividade(){
        $sql = "INSERT INTO atividade
                (  
                  id_atividade
                 ,descricao   
                 ,data_cadastro   
                 ,data_previsao   
                 ,id_turma   
                 ,id_disciplina   
                ) VALUES ";
        
        $sql .= " ('".$this->id_atividade."' 
                  '".$this->descricao."'  
                  '".$this->data_cadastro."'  
                  '".$this->data_previsao."'  
                  '".$this->id_turma."'  
                  '".$this->id_disciplina."' )";

    }
}