<?php


namespace LogDown\Controllers;

use Illuminate\Routing\Controller;

class TesteController extends Controller
{
    public function index()
    {
        var_dump("Estou no controller: ".__CLASS__);
        die();
    }
}