<?php
    namespace App\Controller\UNIFAETEC;

    use App\Controller\AppController;

    class CadPartEvExtController extends AppController
    {
        public function display(...$path)
        {
            $this->set('rodapeAusente', true);
            $this->set('title', 'Cadastro de Participação em Evento Externo');
            $this->set('barraTexto', 'Cadastro de Participação em Evento Externo');
            $this->render('/UNIFAETEC/cad_part_ev_ext', 'base');
        }
    }
?>