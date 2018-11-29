<?php
    namespace App\Controller\UNIFAETEC;

    use App\Controller\AppController;

    class EstatisticasTacController extends AppController
    {
        public function display(...$path)
        {
            $this->set('rodapeAusente', true);
            $this->set('title', 'Estatísticas');
            $this->set('barraTexto', 'Estatísticas');
            $this->render('/UNIFAETEC/estatisticas_tac', 'base');
        }
    }
?>