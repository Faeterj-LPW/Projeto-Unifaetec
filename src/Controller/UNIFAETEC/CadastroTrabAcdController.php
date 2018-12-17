<?php
    namespace App\Controller\UNIFAETEC;

    use App\Controller\AppController;
    use DateTime;

    use App\Model\Entity\ProducaoAcademica;
    use App\Model\Table\ProducaoAcademicaTable;

    class CadastroTrabAcdController extends AppController
    {
        public function display(...$path)
        {
            $this->set('title', 'Cadastro de Trabalhos Acadêmicos');
            $this->set('barraTexto', 'Cadastro de Trabalhos Acadêmicos');
            $this->render('/UNIFAETEC/trabalhos', 'base');
        }

        public function add()
        {   
            $tabela = new ProducaoAcademicaTable();

            $producao = new ProducaoAcademica();
            $producao->titulo = $this->request->getData('titulo');
            // **** Campo não está presente no banco ****
            // $producao->palavra_chave = $this->request->getData('palavra_chave');
            $producao->id_categoria_producao = $this->request->getData('categoria');
            $producao->resumo = $this->request->getData('resumo');
            $producao->data_envio = new DateTime('now');
            $producao->id_usuario = '0'; // Dependência ainda não modelada
            $producao->arquivo = '0'; // Upload não implementado

            $tabela->inserir($producao);

            $this->display();
        }
    }
?>