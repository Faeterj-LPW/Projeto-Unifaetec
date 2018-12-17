<?php
    namespace App\Controller\UNIFAETEC\Atividades;

    use App\Controller\AppController;
    use DateTime;

    use App\Model\Entity\AtividadeAcd;
    use App\Model\Table\AtividadeAcdTable;

    class CadastrarAtvAcdController extends AppController
    {
        public function display(...$path)
        {
            $this->set('title', 'Cadastrar Atividade Acadêmica');
            $this->set('barraTexto', 'Cadastrar Atividade Acadêmica');
            $this->render('/UNIFAETEC/Atividades/cadastrar_atv_acd', 'base');
        }

        public function add()
        {   
            $tabela = new AtividadeAcdTable();
            $atividade = new AtividadeAcd();
            
            $atividade->nome_atividade = $this->request->getData('nomeAtv');
            $atividade->id_tipologia = $this->request->getData('tipoEvento');
            $atividade->local_atividade = $this->request->getData('localAtv');
            $atividade->data_atividade = $this->request->getData('data');
            $atividade->criacao_atividade = new DateTime('now');
            $atividade->horario_atividade = $this->request->getData('hora');
            $atividade->info_atividade = $this->request->getData('detAtividade');

            $tabela->inserir($atividade);

            $this->display();
        }
    }
?>