<?php
    namespace App\Controller\UNIFAETEC;

    use App\Controller\AppController;

    class CadastrarEquipeController extends AppController
    {
        public function display(...$path)
        {
            $this->set('rodapeAusente', true);
            $this->set('title', 'Cadastrar Equipe');
            $this->set('barraTexto', 'Cadastrar Equipe');
            $this->render('/UNIFAETEC/cadastrar_equipe', 'base');
        }
    }
?>