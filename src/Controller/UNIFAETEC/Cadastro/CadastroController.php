<?php
    namespace App\Controller\UNIFAETEC\Cadastro;

    use App\Controller\AppController;
    use DateTime;
    use App\Model\Entity\Cadastro;
    use App\Model\Table\CadastroTable;

    class CadastroController extends AppController
    {
        public function display(...$path)
        {
            $this->set('botaoAusente', true);
            $this->set('title', 'Faça seu cadastro');
            $this->set('barraTexto', 'Cadastro');
            $this->render('/UNIFAETEC/Cadastro/cadastro', 'base');
        }

        public function add()
        {
            $tabela = new CadastroTable();
            $cadastro = new Cadastro();

            //$cadastro->id_usuario = $this->request->getData('id');
            $cadastro->criacao = new DateTime('now');
            $tabela->inserir($cadastro);
        }
    }
?>