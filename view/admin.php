<?php

include 'view/view.php';

class AdminView extends View
{
    public function index()
    {
        $this->render('adminIndex');
    }
}