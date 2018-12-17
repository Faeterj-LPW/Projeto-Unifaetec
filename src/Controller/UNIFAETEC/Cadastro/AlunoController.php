<?php
    namespace App\Controller\UNIFAETEC\Cadastro;

    use App\Controller\AppController;
    use App\Model\Table\AlunoTable;

    class AlunoController extends AppController
    {
        public function display(...$path)
        {
            $this->set('botaoAusente', true);
            $this->set('title', 'Cadastro de Aluno');
            $this->set('barraTexto', 'Cadastro');
            $this->render('/UNIFAETEC/Cadastro/aluno', 'base');
        }

        public function add()
        {
            $tabela = new AlunoTable();
            $aluno = new CadAluno();

            //$aluno->id_usuario = $this->request->getData('id');
            $aluno->turno_aluno = $this->request->getData('turno');
            $aluno->curso_aluno = $this->request->getData('curso');
            $tabela->inserir($aluno);
        }

    }
?>