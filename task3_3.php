<?php

// namespace Test2;
include "task3_1.php";
include "task3_2.php";


$obj1 = new Test\StringMagic();
echo $obj1->rev("Ashish");
$obj2 = new Test2\StringMagic();
print_r($obj2->split("A,s,h,i,s,h"));