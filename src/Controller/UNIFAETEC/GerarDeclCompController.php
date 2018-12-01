<?php
    namespace App\Controller\UNIFAETEC;

    use App\Controller\AppController;

    class GerarDeclCompController extends AppController
    {
        public function display(...$path)
        {
            $this->set('rodapeAusente', true);
            $this->set('title', 'Gerar Declaração de Comparecimento');
            $this->set('barraTexto', 'Gerar Declaração de Comparecimento');
            $this->render('/UNIFAETEC/gerar_decl_comp', 'base');
        }
    }
?>