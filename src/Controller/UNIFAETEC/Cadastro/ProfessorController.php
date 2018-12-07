<?php
    namespace App\Controller\UNIFAETEC\Cadastro;

    use App\Controller\AppController;

    class ProfessorController extends AppController
    {
        public function display(...$path)
        {
            $this->set('botaoAusente', true);
            $this->set('title', 'Cadastro de Professor');
            $this->set('barraTexto', 'Cadastro');
            $this->render('/UNIFAETEC/Cadastro/professor', 'base');
        }
    }
?>