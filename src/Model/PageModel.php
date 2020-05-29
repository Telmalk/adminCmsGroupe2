<?php


namespace Model;


use Helper\AbstractModel;

class PageModel extends AbstractModel
{
    public function test() {
        dump($this->pdo);
        dump($this->errorHandler("fdsf"));
    }
}