<?php

namespace MaicNogueira\Logdown;


class Search
{

    public function listFiles()
    {
//        $texto = "teto";
//        echo file_put_contents("test.txt", $texto);
        $pasta = "./storage/logs/";
        $diretorio = dir($pasta);
        while(($arquivo = $diretorio->read()) !== false) {
            echo $arquivo."<br>".PHP_EOL;
        }
        $diretorio->close();
    }

}