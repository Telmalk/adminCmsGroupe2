<?php


namespace Helper;


use Controller\CoucouController;
use Controller\PageController;

class FrontController
{
    public function __construct()
    {
        $action = $_POST[ADMIN_ACTION_PARAM] ?? $_GET[ADMIN_ACTION_PARAM] ?? '';

        switch ($action) {
            case 'page.add':
                $pageController = new PageController();
                $pageController->add();
                break;
            case 'page.update':
                break;
            case "page.delete":
                break;
            default:
                $coucouController = new CoucouController();
                $coucouController->getCoucou();
                break;
        }

    }
}