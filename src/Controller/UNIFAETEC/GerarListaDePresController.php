<?php
    namespace App\Controller\UNIFAETEC;

    use App\Controller\AppController;

    class GerarListaDePresController extends AppController
    {
        public function display(...$path)
        {
            $this->set('rodapeAusente', true);
            $this->set('title', 'Gerar Lista de Presença');
            $this->set('barraTexto', 'Gerar Lista de Presença');
            $this->render('/UNIFAETEC/gerar_lista_de_pres', 'base');
        }
    }
?>