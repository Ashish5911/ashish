<?php
//task 2.5
// echo "hello";
interface C
{
    public function add(int $x, int $y);

    public function subtract(int $x, int $y);

    public function division(int $x, int $y);

    public function multiplication(int $x, int $y);
}

class CompleteCalculator implements C
{
    public function __construct()
    {
        echo "object of class CompleteCalculator is created<br><br>";
    }
    
    public function Add(int $x, int $y): int
    {
        return $x + $y;
    }

    public function Subtract(int $x, int $y): int
    {
        return $x - $y;
    }

    public function Division(int $x, int $y): int
    {
        return $x / $y;
    }

    public function Multiplication(int $x, int $y): int
    {
        return $x * $y;
    }
}
$obj4 = new CompleteCalculator();
echo "sum of x and y is : ".$obj4->add(7,6)."<br>";
echo "subtaction of x and y is : ".$obj4->subtract(5,3)."<br>";
echo "division of x and y is : ".$obj4->division(10,2)."<br>";
echo "Multiplication of x and y is : ".$obj4->multiplication(5,3)."<br>";
