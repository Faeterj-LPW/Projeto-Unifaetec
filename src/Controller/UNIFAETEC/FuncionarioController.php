<?php
    namespace App\Controller\UNIFAETEC;

    use App\Controller\AppController;

    class FuncionarioController extends AppController
    {
        public function display(...$path)
        {
            $this->set('title', 'Cadastro de Funcionário');
            $this->set('barraTexto', 'Cadastro');
            $this->render('/UNIFAETEC/funcionario', 'base');
        }
    }
?>