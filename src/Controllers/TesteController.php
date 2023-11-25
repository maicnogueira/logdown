<?php


namespace LogDown\Controllers;


class TesteController
{
    public function index()
    {
        var_dump("Estou no controller: ".__CLASS__);
        die();
    }
}