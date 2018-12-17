<?php

namespace App\Model\Table;

use Cake\ORM\Table;

use Cake\Datasource\ConnectionManager;

class ProducaoAcademicaTable extends Table
{
    private $conn;
    
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->conn = ConnectionManager::get('default');

        $this->setTable('producao_academica');
        $this->setPrimaryKey('id_producao');
        $this->setEntityClass('App\Model\Entity\Usuario');
    }

    public function inserir($producao)
    {
        $this->conn->insert('producao_academica', [
            'titulo' => $producao->titulo,
            // **** Campo não está presente no banco ****
            // 'palavra_chave' => $producao->palavra_chave,
            'id_categoria_producao' => $producao->id_categoria_producao,
            'resumo' => $producao->resumo,
            'data_envio' => $producao->data_envio,
            'id_usuario' => $producao->id_usuario,
            'arquivo' => $producao->arquivo
        ], ['data_envio' => 'datetime']);
    }
}