<?php
    namespace App\Controller\UNIFAETEC\Cadastro;

    use App\Controller\AppController;
    use App\Model\Table\UsuarioTable;

    class UsuarioController extends AppController
    {
        public function add()
        {
            $tabela = new UsuarioTable();
            $usuario = new CadUsuario();

            $usuario->senha_usuario = $this->request->getData('senha');
            $usuario->nome_usuario = $this->request->getData('nome');
            $usuario->data_usuario = $this->request->getData('nascimento');
            $usuario->email_usuario = $this->request->getData('email');
            $usuario->cpf_usuario = $this->request->getData('cpf');
            $usuario->matricula_usuario = $this->request->getData('idfuncional');
            $usuario->unidade_usuario = $this->request->getData('unidade');
            $tabela->inserir($usuario);
        }
    }
?>