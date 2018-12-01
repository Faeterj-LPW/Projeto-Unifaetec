<?php
    namespace App\Controller\UNIFAETEC;

    use App\Controller\AppController;

    class InscricaoEmAtivAcadController extends AppController
    {
        public function display(...$path)
        {
            $this->set('rodapeAusente', true);
            $this->set('title', 'Inscrição em Atividades Acadêmicas');
            $this->set('barraTexto', 'Inscrição em Atividades Acadêmicas');
            $this->render('/UNIFAETEC/inscricao_em_ativ_acad', 'base');
        }
    }
?>