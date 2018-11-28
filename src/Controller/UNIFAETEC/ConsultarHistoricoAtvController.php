<?php
    namespace App\Controller\UNIFAETEC;

    use App\Controller\AppController;

    class ConsultarHistoricoAtvController extends AppController
    {
        public function display(...$path)
        {
            $this->set('rodapeAusente', true);
            $this->set('title', 'Consultar Histórico ATV');
            $this->set('barraTexto', 'Consultar Histórico de Atividades');
            $this->render('/UNIFAETEC/consultar_historico_atv', 'base');
        }
    }
?>