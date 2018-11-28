<?php
    namespace App\Controller\UNIFAETEC;

    use App\Controller\AppController;

    class CadastroTrabAcdController extends AppController
    {
        public function display(...$path)
        {
            $this->set('rodapeAusente', true);
            $this->set('title', 'Cadastro de Trabalhos Acadêmicos');
            $this->set('barraTexto', 'Cadastro de Trabalhos Acadêmicos');
            $this->render('/UNIFAETEC/trabalhos', 'base');
        }
    }
?>