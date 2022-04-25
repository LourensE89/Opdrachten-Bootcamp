<?php
echo "Opdracht 1";
echo "<br>";
echo "<br>";

class MyClass{
    const text="'MyClass class has been initialized!'";  
}

echo MyClass::text;

echo "<br>";
echo "<br>";
echo "Opdracht 2";
echo "<br>";
echo "<br>";


class Intro {
    public $name;
    function __construct($name) {
      $this->name = $name;
    }
    function getIntro() {
      return "Hello All, I am $this->name.";
    }
  }
  
  $intro = new Intro("Scott");
  echo $intro->getIntro();
  
echo "<br>";
echo "<br>";
echo "Opdracht 3";
echo "<br>";
echo "<br>";


class Calculator {
    public $numerouno, $numerodos;
    function add() {
      return $this->numerouno + $this->numerodos;
    }
    function substract() {
      return $this->numerouno - $this->numerodos;
    }
    function multiply() {
      return $this->numerouno * $this->numerodos;
    }
    function divide() {
      return $this->numerouno / $this->numerodos;
    }
  }
  
  $calc = new Calculator();
  $calc->numerouno = 10;
  $calc->numerodos = 5;
  
  echo $solution->add();
  echo "<br>";
  echo "<br>";
  echo $solution->substract();
  echo "<br>";echo "<br>";
  echo "<br>";echo "<br>";
  echo $solution->multiply();
  echo "<br>";echo "<br>";
  echo "<br>";echo "<br>";
  echo $solution->divide();
