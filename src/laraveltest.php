<?php

namespace ndonmez\laraveltest;

class laraveltest
{
    public function greet($greet = "Hello World")
    {
        return $greet;
    }
    public static function routes()
    {
        require __DIR__.'/../routes/laraveltest.php';
    }
}
