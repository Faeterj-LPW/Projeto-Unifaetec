<?php
    namespace App\Controller\UNIFAETEC\Eventos;

    use App\Controller\AppController;

    class ConfPresencaController extends AppController
    {
        public function display(...$path)
        {
            $this->set('title', 'Confirmar Presença');
            $this->set('barraTexto', 'Confirmar Presença dos Servidores');
            $this->render('/UNIFAETEC/Eventos/conf_presenca', 'base');
        }
    }
?>