<?php
    namespace App\Controller\UNIFAETEC\Eventos;

    use App\Controller\AppController;

    class CadPartEvExtController extends AppController
    {
        public function display(...$path)
        {
            $this->set('title', 'Cadastro de Participação em Evento Externo');
            $this->set('barraTexto', 'Cadastro de Participação em Evento Externo');
            $this->render('/UNIFAETEC/Eventos/cad_part_ev_ext', 'base');
        }
    }
?>