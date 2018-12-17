<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class CadUsuario extends Entity
{
    protected $_accessible = [
        'id_usuario' => false,
        'senha' => true,
        'nome' => true,
        'data_nascimento' => true,
        'email' => true, 
        'cpf' => true,
        'matricula_funcional' => true,
        'id_unidade' => true
    ];
}