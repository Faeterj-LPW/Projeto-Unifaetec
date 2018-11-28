<?php
    namespace App\Controller\UNIFAETEC;

    use App\Controller\AppController;

    class ProfessorController extends AppController
    {
        public function display(...$path)
        {
            $this->set('title', 'Cadastro de Professor');
            $this->set('barraTexto', 'Cadastro');
            $this->render('/UNIFAETEC/professor', 'base');
        }
    }
?>