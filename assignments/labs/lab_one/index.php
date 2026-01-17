<?php
declare(strict_types=1);
require "header.php";
require "car.php";
require "connect.php";
echo "<p> Follow the instructions outlined in instructions.txt to complete this lab. Good luck & have fun!😀 </p>";

$myCar = new Car("BMW","M4",2023);
echo $myCar -> getter();
require "footer.php";

/* This lab was pretty easy, but if I hadn't paid attention during class
    I would found it trickier, especially now, when we're just starting to figure things out
       and learn the new language's syntax
*/