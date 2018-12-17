<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class CadUsuario extends Entity
{
    protected $_accessible = [
        'id_usuario' => true,
        'telefone' => true,
        'celular' => true,
        'id_setor' => true,
        'id_cargo' => true, 
        'funcao' => true,
        'id_vinculo' => true,
        'colaborador' => true,
        'area_colaboracao' => true
    ];
}