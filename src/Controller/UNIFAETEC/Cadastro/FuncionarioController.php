<?php
    namespace App\Controller\UNIFAETEC\Cadastro;

    use App\Controller\AppController;
    use App\Model\Entity\CadFuncionario;
    use App\Model\Table\FuncionarioTable;

    class FuncionarioController extends AppController
    {
        public function display(...$path)
        {
            $this->set('botaoAusente', true);
            $this->set('title', 'Cadastro de Funcionário');
            $this->set('barraTexto', 'Cadastro');
            $this->render('/UNIFAETEC/Cadastro/funcionario', 'base');
        }

        public function add()
        {
            $tabela = new FuncionarioTable();
            $funcionario = new CadFuncionario();

            //$funcionario->id_usuario = $this->request->getData('id');
            $funcionario->telefone = $this->request->getData('telefone');
            $funcionario->celular = $this->request->getData('celular');
            $funcionario->id_setor = $this->request->getData('setor');
            $funcionario->id_cargo = $this->request->getData('cargo');
            $funcionario->funcao = $this->request->getData('funcao');
            $funcionario->id_vinculo = $this->request->getData('vinculo');
            $funcionario->colaborador = $this->request->getData('colaborador');
            $funcionario->area_colaboracao = $this->request->getData('colaboracao');

            $tabela->inserir($professor);
        }

    }
?>