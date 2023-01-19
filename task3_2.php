<?php
// echo "hello";
namespace Test2;
{
    class StringMagic
    {
        public function __construct()
        {
        echo "<br>object of class split fn is created<br>";
        }

        public function split(string $s)
        {
            return explode(",",$s);
        }
    }

}
// $obj = new StringMagic();
// $a=$obj->split("A,s,h,i,s,h");
// print_r($a);