<?php

namespace Test
{
    class StringMagic
        
    {
        public function __construct()
        {
        echo "object of class rev fn is created<br>";
        }

        public function rev(string $s)
        {
            return strrev($s);
        }
    }
}

// $obj = new StringMagic();
// echo $obj->rev("Ashish");