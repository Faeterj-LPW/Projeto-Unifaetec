<?php
    namespace App\Controller\UNIFAETEC;

    use App\Controller\AppController;

    class GerarDocController extends AppController
    {
        public function display(...$path)
        {
            $this->set('title', 'Gerar Documento');
            $this->set('barraTexto', 'Gerar Documento');
            $this->render('/UNIFAETEC/gerar_doc', 'base');
        }
    }
?>