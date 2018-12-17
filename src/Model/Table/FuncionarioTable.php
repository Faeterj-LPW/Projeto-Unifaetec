<?php

namespace App\Model\Table;

use Cake\ORM\Table;

use Cake\Datasource\ConnectionManager;

class FuncionarioTable extends Table
{
    private $conn;
    
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->conn = ConnectionManager::get('default');

        $this->setTable('funcionario');
        $this->setPrimaryKey('id_usuario');
        $this->setEntityClass('App\Model\Entity\CadFuncionario');
    }

    public function inserir($funcionario)
    {
        // var_dump($atividade);
        $this->conn->insert('funcionario', [
            'id_usuario' => $funcionario->id_usuario,
            'telefone' => $funcionario->telefone,
            'celular' => $funcionario->celular,
            'id_setor' => $funcionario->id_setor,
            'id_cargo' => $funcionario->id_cargo,
            'funcao' => $funcionario->funcao,
            'id_vinculo' => $funcionario->id_vinculo,
            'colaborador' => $funcionario->colaborador,
            'area_colaboracao' => $funcionario->area_colaboracao
        ]);
    }
}