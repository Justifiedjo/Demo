<?php
// echo "Hello World", "<br>";
// $x = 1;

// while($x <= 5) {
//   echo "The number is: $x <br>";
//   $x++;
// } 
// $x = 0;

// while($x <= 100) {
//   echo "The number is: $x <br>";
//   $x+=50;
// } 
// $i = 1; 

// while($i < 6) {
//   echo $i, "<br>";
//   $i++;
// }
// $color = "blue";
// switch ($color) {
//     case "red":
//      echo "Hello";
//      break;
//     case "green":
//      echo "Welcome";
//      break;
//      default:
//      echo "Have a good day". "<br>";
//     }

//     $z = 1;

//     do {
//       echo "The number is: $z <br>";
//       $z++;
//     } while ($z <= 5);

//     $x = 6;
// // Do loop
// do {
//   echo "The number is: $x <br>";
//   $x++;
// } while ($x <= 6);

echo "<br>";

// For loop
// for ($x = 0; $x <= 100; $x+=10) {
//     echo "The number is: $x <br>";
//   } 

for ($i = 0; $i < 10; $i+=3) {
    echo $i;
  }
echo "<br>";
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "$value <br>";
}

$age = array ("Peter"=>"40", "Ben"=>"45", "Joe"=>"49");

foreach($age as $x => $val) {
    echo "$x = $val <br>";
}

// PHP Continue
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        continue;
    }
    echo " The number is: $x <br>";
}
echo "<br>";

$x = 0;

while($x < 10) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
  $x++;
} 
echo "<br>";

$x = 0;

// while($x < 10) {
//   if ($x == 4) {N
//     $x++;
//     continue;
//   }
//   echo "The number is: $x <br>";
//   $x++;
// }
function writeMsg() {
    echo "Hello world!";
  }
  
  writeMsg(); // call the function

//   function familyName($fname) {
//     echo "$fname Refsnes.<br>";
//   }
  
//   familyName("Jani");
//   familyName("Hege");
//   familyName("Stale");
//   familyName("Kai Jim");
//   familyName("Borge");

echo "<br>";
function familyName($fname, $year) {
    echo "$fname Refsnes. Born in $year <br>";
  }
  
  familyName("Hege", "1975");
  familyName("Stale", "1978");
  familyName("Kai Jim", "1983");
  echo "<br>";


function sum(int $x, int $y) {
$z = $x + $y;
return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);
