<?php

namespace App\Model\Table;

use Cake\ORM\Table;

use Cake\Datasource\ConnectionManager;

class UsuarioTable extends Table
{
    private $conn;
    
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->conn = ConnectionManager::get('default');

        $this->setTable('usuario');
        $this->setPrimaryKey('id_usuario');
        $this->setEntityClass('App\Model\Entity\CadUsuario');
    }

    public function inserir($usuario)
    {
        // var_dump($atividade);
        $this->conn->insert('usuario', [
            'senha' => $usuario->senha_usuario,
            'nome' => $usuario->nome_usuario,
            'data_nascimento' => $usuario->data_usuario,
            'email' => $usuario->email_usuario,
            'cpf' => $usuario->cpf_usuario,
            'matricula_funcional' => $usuario->matricula_usuario,
            'id_unidade' => $usuario->unidade_usuario
        ]);
    }
}