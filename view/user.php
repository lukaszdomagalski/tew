<?php

include 'view/view.php';

class UserView extends View
{
    public function index()
    {
        $this->render('userIndex');
    }
}