<?php
    namespace App\Controller\UNIFAETEC;

    use App\Controller\AppController;

    class CadastroController extends AppController
    {
        public function display(...$path)
        {
            $this->set('title', 'Faça seu cadastro');
            $this->set('barraTexto', 'Cadastro');
            $this->render('/UNIFAETEC/cadastro', 'base');
        }
    }
?>