<?php
    namespace App\Controller\UNIFAETEC;

    use App\Controller\AppController;

    class EmitirCertController extends AppController
    {
        public function display(...$path)
        {
            $this->set('rodapeAusente', true);
            $this->set('title', 'Emitir Certificado');
            $this->set('barraTexto', 'Emitir Certificados de Participação');
            $this->render('/UNIFAETEC/emitir_cert', 'base');
        }
    }
?>