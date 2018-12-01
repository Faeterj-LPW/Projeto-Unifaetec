<?php
    namespace App\Controller\UNIFAETEC;

    use App\Controller\AppController;

    class ConsultarBiblVirtController extends AppController
    {
        public function display(...$path)
        {
            $this->set('rodapeAusente', true);
            $this->set('title', 'Consultar Biblioteca Virtual');
            $this->set('barraTexto', 'Consultar Biblioteca Virtual');
            $this->render('/UNIFAETEC/consultar_bibl_virt', 'base');
        }
    }
?>