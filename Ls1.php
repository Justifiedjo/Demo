
<?php
  $x = 15; 
  $y = 15;
// // global scope

function myTest() {
    global $x, $y;
    $y = $x + $y;

}

myTest();
echo $y;
echo "<br>";

$phrase = "Dull the Dung";

echo strtoupper("john". "<br>");

// echo $phrase [7];


echo substr($phrase, 9);
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Benz");
echo $myCar -> message();



// myTest();
// $color = "red";
// echo "My car is " . $color. "<br>";

// function myTest() {
//     $x = 40; // local scope
//     echo "<p>Variable x inside function is: $x</p>";
//   }
//   myTest();
  
//   // using x outside the function will generate an error
//   echo "<p>Variable x outside function is: $x</p>";
//   echo $x + $y;
?> 