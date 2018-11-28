<?php
    namespace App\Controller\UNIFAETEC;

    use App\Controller\AppController;

    class EventosController extends AppController
    {
        public function display(...$path)
        {
            $this->set('title', 'Evento');
            $this->set('barraTexto', 'Eventos');
            $this->render('/UNIFAETEC/evento1', 'base');
        }
    }
?>