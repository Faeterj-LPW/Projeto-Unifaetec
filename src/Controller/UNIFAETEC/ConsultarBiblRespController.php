<?php
    namespace App\Controller\UNIFAETEC;

    use App\Controller\AppController;

    class ConsultarBiblRespController extends AppController
    {
        public function display(...$path)
        {
            $this->set('title', 'Resultado da Consulta');
            $this->set('barraTexto', 'Consulta');
            $this->render('/UNIFAETEC/consultar_bibl_resp', 'base');
        }
    }
?>