<?php
    namespace App\Controller\UNIFAETEC;

    use App\Controller\AppController;

    class CadastrarAtvAcdController extends AppController
    {
        public function display(...$path)
        {
            $this->set('rodapeAusente', true);
            $this->set('title', 'Cadastrar Atividade Acadêmica');
            $this->set('barraTexto', 'Cadastrar Atividade Acadêmica');
            $this->render('/UNIFAETEC/cadastrar_atv_acd', 'base');
        }
    }
?>