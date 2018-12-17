<?php

namespace App\Model\Table;

use Cake\ORM\Table;

use Cake\Datasource\ConnectionManager;

class AlunoTable extends Table
{
    private $conn;
    
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->conn = ConnectionManager::get('default');

        $this->setTable('aluno');
        $this->setPrimaryKey('id_usuario');
        $this->setEntityClass('App\Model\Entity\CadAluno');
    }

    public function inserir($aluno)
    {
        // var_dump($atividade);
        $this->conn->insert('aluno', [
            'id_usuario' => $aluno->id_usuario,
            'id_turno' => $aluno->turno_aluno,
            'id_curso' => $aluno->curso_aluno
        ]);
    }
}