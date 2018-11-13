<?php
    namespace App\Controller;

    use App\Controller\AppController;

    class UnifaetecController extends AppController
    {
        public function display(...$path)
        {
            $count = count($path);
            if (!$count) {
                return $this->redirect('/');
            }
            if (in_array('..', $path, true) || in_array('.', $path, true)) {
                throw new ForbiddenException();
            }
            $page = $subpage = null;

            if (!empty($path[0])) {
                $page = $path[0];
            }
            if (!empty($path[1])) {
                $subpage = $path[1];
            }
            $this->set(compact('page', 'subpage'));

            try {
                $path = str_replace('.php', '', $path);
                $this->render(implode('/', $path), 'base');
            } catch (MissingTemplateException $exception) {
                if (Configure::read('debug')) {
                    throw $exception;
                }
                throw new NotFoundException();
            }
        }
    }
?>