<?php
# Récupération des paramètres GET de l'URL.
$controller = 'App\\Controller\\' . ucfirst( $_GET['controller'] ) . 'Controller';
$action = $_GET['action'];

/* #Routage AUTOMATIQUE de notre application
$obj = new $controller(); // DefaultController, UserController, ...
$obj->$action(); // home, category, register, ...*/
call_user_func_array([ new $controller, $action], []);


# Création des objets
/* # Pour le routage manuel
$defaultCtrl = new DefaultController();
$userCtrl = new UserController(); */

/* #Routage MANUEL de notre application
    # Page DefaultController
if ( $controller == 'default' && $action == 'home' ) {
    $defaultCtrl->home();
}

if ( $controller == 'default' && $action == 'category' ) {
    $defaultCtrl->category();
}

if ( $controller == 'default' && $action == 'article' ) {
    $defaultCtrl->article();
}

if ( $controller == 'user' && $action == 'register' ) {
    echo "<h1>PAGE INSCRIPTION</h1>";
}

if ( $controller == 'user' && $action == 'login' ) {
    echo "<h1>PAGE CONNEXION</h1>";
}

    # Page UserController
if ( $controller == 'user' && $action == 'register' ) {
    $UserCtrl->register();
}

if ( $controller == 'user' && $action == 'login' ) {
    $UserCtrl->login();
}*/