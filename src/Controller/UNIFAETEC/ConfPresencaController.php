<?php
    namespace App\Controller\UNIFAETEC;

    use App\Controller\AppController;

    class ConfPresencaController extends AppController
    {
        public function display(...$path)
        {
            $this->set('rodapeAusente', true);
            $this->set('title', 'Confirmar Presença');
            $this->set('barraTexto', 'Confirmar Presença dos Servidores');
            $this->render('/UNIFAETEC/conf_presenca', 'base');
        }
    }
?>