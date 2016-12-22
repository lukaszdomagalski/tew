<?php
session_start();
//unset($_SESSION['user']);

if (!isset($_SESSION['user'])) {
    require_once 'controller/login.php';
    $ob = new LoginController();
    if ( isset($_GET['task']) &&  isset($_GET['action']) && $_GET['task'] == 'login' && $_GET['action'] == 'login') {
        $ob->$_GET['action']();
        return;
    }
    $ob->index();
    return;
}

if (isset($_GET['task']) && $_GET['task'] == 'categories') {
    include 'controller/categories.php';
    $ob = new CategoriesController();
    $ob->$_GET['action']();
} else if (isset($_GET['task']) && $_GET['task'] == 'articles') {
    include 'controller/articles.php';
    $ob = new ArticlesController();
    if (method_exists($ob, $_GET['action'])) {
        $ob->$_GET['action']();
    }
} else if (isset($_GET['task']) && $_GET['task'] == 'login') {
    require_once 'controller/login.php';
    $ob = new LoginController();
    if (method_exists($ob, $_GET['action'])) {
        $ob->$_GET['action']();
    }
} else if( isset($_GET['task']) && $_GET['task'] == 'admin') {
    require_once 'controller/admin.php';
    $ob = new AdminController();
    if (method_exists($ob, $_GET['action'])) {
        $ob->$_GET['action']();
    }
} else if( isset($_GET['task']) && $_GET['task'] == 'user') {
    require_once 'controller/user.php';
    $ob = new UserController();
    if (method_exists($ob, $_GET['action'])) {
        $ob->$_GET['action']();
    }
} else {
    include 'controller/articles.php';
    $ob = new ArticlesController();
    $ob->index();
}
?>
