<?php
    namespace App\Controller\UNIFAETEC;

    use App\Controller\AppController;
    use Cake\Datasource\ConnectionManager;
    use DateTime;

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
            // Dump de campos do formulário
            // var_dump($this->request->getData());
            $conn = ConnectionManager::get('default');
            $conn->insert('producao_academica', [
                'titulo' => $this->request->getData('titulo'),
                // **** Campo não está presente no banco ****
                // 'palavra_chave' => $this->request->getData('palavra_chave'),
                'id_categoria_producao' => $this->request->getData('categoria'),
                'resumo' => $this->request->getData('resumo'),
                'data_envio' => new DateTime('now'),
                'id_usuario' => '0', // Dependência ainda não modelada
                'arquivo' => '0' // Upload não implementado
            ], ['data_envio' => 'datetime']);
            $this->display();
        }
    }
?>