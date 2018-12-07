<?php
    namespace App\Controller\UNIFAETEC\Cadastro;

    use App\Controller\AppController;

    class FuncionarioController extends AppController
    {
        public function display(...$path)
        {
            $this->set('botaoAusente', true);
            $this->set('title', 'Cadastro de Funcionário');
            $this->set('barraTexto', 'Cadastro');
            $this->render('/UNIFAETEC/Cadastro/funcionario', 'base');
        }
    }
?>