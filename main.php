<?php
   // user-defined functions

    function calculate($a ,$b, $command): mixed {
      switch ($command){
        case 'add':
            return $a + $b;
        case 'subtract':
            return $a - $b;
        default:
        return "Invalid Operation";
      }
    }

    echo calculate(a: 10 , b:20, command: 'add');
    echo "\n";
     echo calculate(a: 50 , b:70, command: 'subtract'); 
?>