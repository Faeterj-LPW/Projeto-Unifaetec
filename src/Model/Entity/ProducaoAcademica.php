<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;


class ProducaoAcademica extends Entity
{
    protected $_accessible = [
        'id_producao' => false,
        'id_usuario' => true,
        'id_categoria_producao' => true,
        'titulo' => true,
        'palavra_chave' => true, 
        'resumo' => true,
        'data_envio' => true,
        'arquivo' => true
    ];
}