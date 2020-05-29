<?php


namespace View;


class CoucouView
{
    public function index(string $word) {
        ?>
        <h1><?=$word?></h1>
        <?php
    }
}