<?php

// class Student extends School{
//     use MyFiles;

//     public $name;
//     var $age;

//     public function init($method) {
//         if(count($method) > 0) {
//             $this->name = $method['name'];
//             $this->age = $method['age'];
//             $this->faculty = $method['faculty'];
//             $this->level = $method['level'];
//             return true;
//         }
//         return false;
//     }

//     public function write() {
//         $schoolName = $this->schoolName();

//         $string = "Name: $this->name, \n";
//         $string .= "Age: $this->age, \n";
//         $string .= "level: $this->level, \n";
//         $string .= "faculty: $this->age, \n";
//         $string .= "Schhol Name: $schoolName, \n";

//         if($this->writeToFile($string)) {
//             echo "<h1>Your information has been save successfully</h1>";
//         } else {
//             echo "<h1>An error occur while saving data</h1>";
//         }
//     }

// }

// class School {
//     protected $faculty;
//     protected $level;
//     private $schoolName = "Nnamdi Aikiwe University";

//     public function schoolName() {
//         return $this->schoolName;
//     }
// }

// trait MyFiles {
//     private $fileName = 'student.txt';

//     private function writeToFile($string = 'hdhh') {
//         $hand = fopen($this->fileName, 'a');
//         $hasWritten = fwrite($hand, $string.PHP_EOL);
//         return $hasWritten;
//     }

//     public function readFile() {
//         $hand = fopen($this->fileName, 'r');
//         $content = fread($hand, 9999999);
//         return $content;
//     }
    
// }

// $st = new Student();
// if($st->init($_POST)) {
//     echo $st->name.",";
//     $st->write(); 
// }
// if(isset($_GET['read'])) {
//     echo '<pre>';
//     echo $st->readFile();
//     echo '</pre>';
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="lesson.php?read=1"> Student Data</a>
    <form action="" method="post">
        Name: <input name="name"><br><br>
        Age: <input name="age"><br><br>
        Faculty: <input name="faculty"><br><br>
        Level: <input name="level"><br><br>
        <input type="submit" value="Save Info">
    </form> 
</body>
<?php


// }
// functiuon myTest() {
//   static $x = 10;
//   echo $x;
//   $x--;
// }

// myTest();
// myTest();
// myTest();
?> 
</html>