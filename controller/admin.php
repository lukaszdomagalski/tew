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
    const STUDENT_PANEL_URL = '?task=user&action=index';

    public function index()
    {
        if ($this->ifNotAdminRedirect(self::STUDENT_PANEL_URL) === true) {
            return;
        }
        $this->loadView('admin')->index();
    }

}