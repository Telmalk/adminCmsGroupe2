<?php


namespace Model;


use Helper\AbstractModel;

class CoucouModel extends AbstractModel
{
    public function getWord() {
        dump($this->pdo);
        dump($this->errorHandler());
        return "hello World";
    }

    public function getWord2() {
        return "coucou le monde";
    }

}