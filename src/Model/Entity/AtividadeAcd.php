<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;


class AtividadeAcd extends Entity
{
    protected $_accessible = [
        'id_atividade' => false,
        'id_tipologia' => true,
        'criacao_atividade' => true,
        'nome_atividade' => true,
        'local_atividade' => true, 
        'data_atividade' => true,
        'horario_atividade' => true,
        'info_atividade' => true
    ];
}