<?php 

require_once 'app/controller/OsisController.php';

$osisController = new OsisController();

$id = (isset($_GET['id'])) ? $_GET['id'] : '';
$route = (isset($_GET['route'])) ? $_GET['route'] : '';

switch ($route) {
    case 'daftar':
        $osisController->create();
        break;

    case 'store':
        $osisController->store($_POST);
        break;

    case 'cek':
        $osisController->index();
        break;

    case 'download':
        $osisController->download($id);
        break;

    case 'delete':
        $osisController->delete($id);
        break;

    case 'panduan':
        $osisController->panduan();
        break;

    default:
        $osisController->home();
        break;
}


