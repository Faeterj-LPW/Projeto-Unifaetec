<?php

namespace App\Model\Table;

use Cake\ORM\Table;

use Cake\Datasource\ConnectionManager;
use DateTime;

class AtividadeAcdTable extends Table
{
    private $conn;
    
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->conn = ConnectionManager::get('default');

        $this->setTable('atividade_academica');
        $this->setPrimaryKey('id_atividade');
        $this->setEntityClass('App\Model\Entity\AtividadeAcd');
    }

    public function inserir($atividade)
    {
        // var_dump($atividade);
        $this->conn->insert('atividade_academica', [
            'nome_atividade' => $atividade->nome_atividade,
            'id_tipologia' => $atividade->id_tipologia,
            'criacao_atividade' => $atividade->criacao_atividade,
            'local_atividade' => $atividade->local_atividade,
            'data_atividade' => $atividade->data_atividade,
            'horario_atividade' => $atividade->horario_atividade,
            'info_atividade' => $atividade->info_atividade
        ], ['data_atividade' => 'date', 'criacao_atividade' => 'datetime', 'horario_atividade' => 'time']);
    }
}