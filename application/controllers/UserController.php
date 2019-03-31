<?php

namespace application\controllers;

use application\core\Controller;

class UserController extends Controller
{
    public function indexAction()
    {
        $users = $this->model->getAllUsers();
        $data = [
            'users' => $users,
        ];
        $this->view->render('upload/results', $data);
    }

    public function clearAllAction()
    {
        $this->model->clearUsersTable();
        $this->view->redirect('/results');
    }
}