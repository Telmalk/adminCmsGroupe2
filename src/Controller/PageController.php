<?php


namespace Controller;


use Model\PageModel;
use View\PageView;

class PageController
{
    private $pageView;
    private $pageModel;

    public function __construct()
    {
        $this->pageModel = new PageModel();
        $this->pageView = new PageView();
    }

    public function add()
    {
        if (isset($_POST['page']) && $_SERVER['REQUEST_METHOD'] === "POST") {
            $dataPage = $_POST['page'];
            $this->pageModel->add($dataPage);
            header("Location: index.php");
        } else {
            throw new \Exception("Forbidden");
        }
    }

}