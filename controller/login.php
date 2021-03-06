<?php

require_once 'AbstractController.php';

/**
 * Created by PhpStorm.
 * User: Lukasz
 * Date: 2016-12-16
 * Time: 16:12
 */
class LoginController extends AbstractController
{
    public function index()
    {
        $this->loadView('login')->index();
    }

    public function login()
    {
        if (empty($_POST['password']) || empty($_POST['email'])) {
            return;
        }

        /**
         * @var $model UserModel
         */
        $model = $this->loadModel('user');
        $user = $model->find([
            'email' => $_POST['email'],
            'haslo' => $_POST['password']
        ]);

        $_SESSION['user'] = $user[0];
        if ($user[0]['is_admin'] == 1) {   //zmienić ifa na tego z pliku abstractcontroller
            $this->redirect('?task=admin&action=index');
        } else {
            $this->redirect();
        }
    }

    public function logout()
    {
        unset($_SESSION['user']);
        $this->redirect('?task=login&action=index');

    }
}