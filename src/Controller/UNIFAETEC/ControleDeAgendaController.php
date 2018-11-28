<?php
    namespace App\Controller\UNIFAETEC;

    use App\Controller\AppController;

    class ControleDeAgendaController extends AppController
    {
        public function display(...$path)
        {
            $this->set('rodapeAusente', true);
            $this->set('title', 'Controle de agenda');
            $this->set('barraTexto', 'Controle de Agenda');
            $this->render('/UNIFAETEC/controle_de_agenda', 'base');
        }
    }
?>