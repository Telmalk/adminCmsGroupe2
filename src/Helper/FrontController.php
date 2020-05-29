<?php


namespace Helper;


use Controller\CoucouController;

class FrontController
{
    public function __construct()
    {
        $action = $_POST[ADMIN_ACTION_PARAM] ?? $_GET[ADMIN_ACTION_PARAM] ?? '';

        switch ($action) {
            case "hello":
                $coucouController = new CoucouController();
                $coucouController->getHelloWord();
                break;
            default:
                $coucouController = new CoucouController();
                $coucouController->getCoucou();
                break;
        }

    }
}