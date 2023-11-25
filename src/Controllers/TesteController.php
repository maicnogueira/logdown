<?php


namespace LogDown\Controllers;

use Illuminate\Routing\Controller;

class TesteController
{
    public function index()
    {
        var_dump("Estou no controller: ".__CLASS__);
        die();
    }
}