<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class CadUsuario extends Entity
{
    protected $_accessible = [
        'id_usuario' => true,
        'id_area' => true,
        'lattes' => true,
        'id_formacao' => true
    ];
}