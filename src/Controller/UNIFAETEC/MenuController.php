<?php
    namespace App\Controller\UNIFAETEC;

    use App\Controller\AppController;

    class MenuController extends AppController
    {
        public function display(...$path)
        {
            $this->set('title', 'Menu Principal');
            $this->set('barraTexto', 'Menu');
            $this->render('/UNIFAETEC/menu', 'base');
        }
    }
?>