<?php

require_once 'AbstractController.php';

/**
 * Created by PhpStorm.
 * User: Lukasz
 * Date: 2016-12-20
 * Time: 18:15
 */
class AdminController extends AbstractController
{
    const STUDENT_PANEL_URL     = '?task=user&action=index';
    const ADMIN_PANEL_INDEX_URL = '?task=admin&action=index';

    public function index()
    {
        if ($this->ifNotAdminRedirect(self::STUDENT_PANEL_URL) === true) {
            return;
        }
        $this->loadView('admin')->index();
    }

    public function registerUser()
    {
        if ($this->ifNotAdminRedirect(self::STUDENT_PANEL_URL) === true) {
            return;
        }
        if (empty($_POST)) {
            return;
        }
        /**
         * @var $userModel UserModel
         */
        $userModel = $this->loadModel('user');
        //TODO validation
//        $haslo = sha1($haslo);
        if ($userModel->addUser($_POST) === false) {
            $_SESSION['errorMessage'] = 'Błąd połączenia z bazą danych';
        } else {
            $_SESSION['successMessage'] = 'Pomyślnie dodano użytkownika';
        }
        $this->redirect(self::ADMIN_PANEL_INDEX_URL);
    }

}