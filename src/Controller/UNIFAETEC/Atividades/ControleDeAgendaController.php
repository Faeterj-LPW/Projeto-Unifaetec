<?php
    namespace App\Controller\UNIFAETEC\Atividades;

    use App\Controller\AppController;

    class ControleDeAgendaController extends AppController
    {
        public function display(...$path)
        {
            $this->set('title', 'Controle de agenda');
            $this->set('barraTexto', 'Controle de Agenda');
            $this->render('/UNIFAETEC/Atividades/controle_de_agenda', 'base');
        }
    }
?>