<?php
    namespace App\Controller\UNIFAETEC\Cadastro;

    use App\Controller\AppController;
    use App\Model\Table\ProfessorTable;

    class ProfessorController extends AppController
    {
        public function display(...$path)
        {
            $this->set('botaoAusente', true);
            $this->set('title', 'Cadastro de Professor');
            $this->set('barraTexto', 'Cadastro');
            $this->render('/UNIFAETEC/Cadastro/professor', 'base');
        }

        public function add()
        {
            $tabela = new ProfessorTable();
            $professor = new CadProfessor();

            //$professor->id_usuario = $this->request->getData('id');
            $professor->id_area = $this->request->getData('area');
            $professor->lattes = $this->request->getData('lattes');
            $professor->formacao = $this->request->getData('formacao');
            $tabela->inserir($professor);
        }

    }
?>