<?php

class Calculator;

   function square($int) {
        $square = $int * $int;
        return $square;
    }
    
    function root($int) { 
        $root = $int / $int;
        return $root;
    }
    
    function divide($firstInt, $secondInt) { 
        $divide = $firstInt / $secondInt;
        return $divide;
    }
    
    function multiply($firstInt, $seoondInt) {
        $multiply = $firstInt * $seoondInt;
        return $multiply;
    } 
    
    function calculate(int $ans) { 
        echo($ans);
    }
    
    $array = array(
     //   calculate(multiply(multiply(50, 5), divide(29, 5))),
     //   calculate(multiply(multiply(25, 5), divide(452, 5)))
    );
    
    foreach($array as $answer) { 
    }
    
    echo(calculate(multiply(5, divide(98, root(300)))));
    
}
