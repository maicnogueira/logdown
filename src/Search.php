<?php

namespace MaicNogueira\Logdown;


class Search
{

    public function get()
    {
        $texto = "teto";
        echo file_put_contents("test.txt", $texto);
    }

}