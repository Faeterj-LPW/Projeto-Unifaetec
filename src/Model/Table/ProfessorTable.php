<?php

namespace App\Model\Table;

use Cake\ORM\Table;

use Cake\Datasource\ConnectionManager;

class ProfessorTable extends Table
{
    private $conn;
    
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->conn = ConnectionManager::get('default');

        $this->setTable('professor');
        $this->setPrimaryKey('id_usuario');
        $this->setEntityClass('App\Model\Entity\CadProfessor');
    }

    public function inserir($professor)
    {
        // var_dump($atividade);
        $this->conn->insert('aluno', [
            'id_usuario' => $professor->id_usuario,
            'id_area' => $professor->id_area,
            'lattes' => $professor->lattes,
            'id_formacao' => $professor->formacao
        ]);
    }
}