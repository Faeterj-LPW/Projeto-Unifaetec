<?php
    namespace App\Controller\UNIFAETEC\Atividades;

    use App\Controller\AppController;

    class CadastrarAtvAcdController extends AppController
    {
        public function display(...$path)
        {
            $this->set('title', 'Cadastrar Atividade Acadêmica');
            $this->set('barraTexto', 'Cadastrar Atividade Acadêmica');
            $this->render('/UNIFAETEC/Atividades/cadastrar_atv_acd', 'base');
        }
    }
?>