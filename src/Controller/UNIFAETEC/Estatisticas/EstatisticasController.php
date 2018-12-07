<?php
    namespace App\Controller\UNIFAETEC\Estatisticas;

    use App\Controller\AppController;

    class EstatisticasController extends AppController
    {
        public function display(...$path)
        {
            $this->set('title', 'Estatísticas');
            $this->set('barraTexto', 'Estatísticas');
            $this->render('/UNIFAETEC/Estatisticas/estatisticas', 'base');
        }
    }
?>