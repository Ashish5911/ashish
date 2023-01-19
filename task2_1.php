<?php

//task 2.1
// echo "helllo";
class Calc
{   
    public function __construct()
    {
        echo "object of class Calc is created<br>";
    }
    
    public function add(int $x, int $y): int
    {
        return $x + $y;
    }

    public function subtract(int $x, int $y): int
    {
        return $x - $y;
    }
}

$obj = new Calc();
echo "sum of x and y is : ".$obj->add(5,6)."<br>";
echo "subtaction of x and y is : ".$obj->subtract(5,3)."<br>";

//task 2.2

trait divide
{
    public function div(int $x, int $y): int
    {
        return $x / $y;
    }
}

//task 2.3

class Calculator extends Calc
{
    use divide;

    public function __construct()
    {
        echo "<br><br>object of class Calculator is created<br>";
    }

    public function multiply(int $x, int $y): int
    {
        return $x * $y;
    }
}

$obj2 = new Calculator();
echo "sum of x and y is : ".$obj2->add(7,6)."<br>";
echo "division of x and y is : ".$obj2->div(10,2)."<br>";
echo "Multiplication of x and y is : ".$obj2->multiply(5,3)."<br>";

//task 2.4
class FinalCalculator extends Calculator
{
    public function __construct()
    {
        echo "<br><br>object of class FinalCalculator is created<br>";
    }
}

$obj3 = new FinalCalculator();
echo "sum of x and y is : ".$obj3->add(7,6)."<br>";
echo "subtaction of x and y is : ".$obj3->subtract(5,3)."<br>";
echo "division of x and y is : ".$obj3->div(10,2)."<br>";
echo "Multiplication of x and y is : ".$obj3->multiply(5,3)."<br>";

//task 2.5

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
        echo "<br><br>object of class CompleteCalculator is created<br>";
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
