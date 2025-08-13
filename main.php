<?php
   // user-defined functions

    function calculate($a ,$b, $command): mixed {
      switch ($command){
        case 'add':
            return $a + $b;
        case 'subtract':
            return $a - $b;
        case 'product':
            return $a * $b;
        case 'quotient':
            return $a / $b;
        default:
        return "Invalid Operation";
      }
    }

    echo calculate(a: 10 , b:5, command: 'add') . "<br>";
    echo calculate(a: 20 , b:10, command: 'subtract') . "<br>"; 
    echo calculate(a: 5 , b:7, command: 'product') .  "<br>";
    echo calculate(a: 7 , b:2, command: 'quotient') .  "<br>";

     String= "WebSystemTechnologiesIT204"
?>