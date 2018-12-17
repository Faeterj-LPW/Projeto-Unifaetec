<?php

namespace App\Model\Table;

use Cake\ORM\Table;

use Cake\Datasource\ConnectionManager;
use DateTime;

class CadastroTable extends Table
{
    private $conn;
    
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->conn = ConnectionManager::get('default');

        $this->setTable('usuario');
        $this->setPrimaryKey('id_usuario');
        $this->setEntityClass('App\Model\Entity\Cadastro');
    }

    public function inserir($cadastro)
    {
        // var_dump($atividade);
        $this->conn->insert('cadastro', [
            'id_usuario' => $cadastro->id_usuario,
            'criacao' => $cadastro->criacao
        ], ['criacao' => 'date']);
    }
}