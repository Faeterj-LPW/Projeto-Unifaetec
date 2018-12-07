<?php
    namespace App\Controller\UNIFAETEC\Atividades;

    use App\Controller\AppController;

    class InscricaoEmAtivAcadController extends AppController
    {
        public function display(...$path)
        {
            $this->set('title', 'Inscrição em Atividades Acadêmicas');
            $this->set('barraTexto', 'Inscrição em Atividades Acadêmicas');
            $this->render('/UNIFAETEC/Atividades/inscricao_em_ativ_acad', 'base');
        }
    }
?>