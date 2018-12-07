<?php
    namespace App\Controller\UNIFAETEC\Cadastro;

    use App\Controller\AppController;

    class CadastroController extends AppController
    {
        public function display(...$path)
        {
            $this->set('botaoAusente', true);
            $this->set('title', 'Faça seu cadastro');
            $this->set('barraTexto', 'Cadastro');
            $this->render('/UNIFAETEC/Cadastro/cadastro', 'base');
        }
    }
?>