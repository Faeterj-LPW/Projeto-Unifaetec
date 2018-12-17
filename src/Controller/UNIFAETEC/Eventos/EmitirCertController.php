<?php
    namespace App\Controller\UNIFAETEC\Eventos;

    use App\Controller\AppController;

    class EmitirCertController extends AppController
    {
        public function display(...$path)
        {
            $this->set('title', 'Emitir Certificado');
            $this->set('barraTexto', 'Emitir Certificados de Participação ou Comparecimento');
            $this->render('/UNIFAETEC/Eventos/emitir_cert', 'base');
        }
    }
?>