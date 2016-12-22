<?php

include 'view/view.php';

/**
 * Created by PhpStorm.
 * User: Lukasz
 * Date: 2016-12-16
 * Time: 16:23
 */
class LoginView extends View
{
    public function  index() {
        $this->render('loginForm');
    }
}