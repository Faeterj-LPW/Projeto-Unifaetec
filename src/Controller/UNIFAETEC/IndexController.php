<?php
    namespace App\Controller\UNIFAETEC;

    use App\Controller\AppController;

    class IndexController extends AppController
    {
        public function display(...$path)
        {
            $this->set('botaoAusente', true);
            $this->set('barraAusente', true);
            $this->set('title', 'Acesso ao Sistema');
            $this->render('/UNIFAETEC/index', 'base');
        }
    }
?>