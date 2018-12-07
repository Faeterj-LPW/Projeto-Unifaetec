<?php
    namespace App\Controller\UNIFAETEC\Cadastro;

    use App\Controller\AppController;

    class AlunoController extends AppController
    {
        public function display(...$path)
        {
            $this->set('botaoAusente', true);
            $this->set('title', 'Cadastro de Aluno');
            $this->set('barraTexto', 'Cadastro');
            $this->render('/UNIFAETEC/Cadastro/aluno', 'base');
        }
    }
?>