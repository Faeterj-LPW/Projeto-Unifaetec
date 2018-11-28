<?php
    namespace App\Controller\UNIFAETEC;

    use App\Controller\AppController;

    class AlunoController extends AppController
    {
        public function display(...$path)
        {
            $this->set('title', 'Cadastro de Aluno');
            $this->set('barraTexto', 'Cadastro');
            $this->render('/UNIFAETEC/aluno', 'base');
        }
    }
?>