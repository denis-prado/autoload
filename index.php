<?php
require_once 'autoload.php';

//require __DIR__.'/app/controller/homeController.php';

$pagina = $_GET['pagina'] ?? 'index';

$homeController = new HomeController();

switch($pagina){
    case 'index':
    $homeController->index();
    break;

    case 'conta':
    $homeController->contaView();
    break;
}