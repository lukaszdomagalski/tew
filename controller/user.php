<?php

require_once 'AbstractController.php';

/**
 * Created by PhpStorm.
 * User: Lukasz
 * Date: 2016-12-20
 * Time: 18:15
 */
class UserController extends AbstractController
{
    public function index()
    {
//        if ($this->ifNotAdminRedirect(STUDENT_PANEL_URL) === true) {
//            return;
//        }
        $this->loadView('user')->index();
    }

}