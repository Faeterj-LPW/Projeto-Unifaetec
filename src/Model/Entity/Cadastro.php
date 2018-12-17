<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class CadUsuario extends Entity
{
    protected $_accessible = [
        'id_usuario' => true,
        'criacao' => true,
        'modificacao' => true,
    ];
}