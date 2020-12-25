<?php

class Calculator { 

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
    
    function calculate(string $message, int $ans) { 
        echo($message . ": " . $ans);
    }
    
    $array = array(
     //   calculate(multiply(multiply(50, 5), divide(29, 5))),
     //   calculate(multiply(multiply(25, 5), divide(452, 5)))
    );
    
    foreach($array as $answer) { 
    
         echo(calculate(multiply(5, divide(98, root(300)))));
    }
   
    //time 
   
    function time_1(int $t1) { 
       
      
    function time_value() { 
       if($t1 >= 0 and >= 0) { 
          $time = (time_1() - time_2());
          return $time;
       }else{
          return null;
       }
    }
       
    //distance 
    function distance(int $t, int $v1, $v2) { //delta form for velocity and time
       $time = (time_value());
       if($v2 = null and $time >= 0 and $v1 >= 0 and $v2 >= 0) { 
          $acceleration = (($v1 - $v2) / $time);
          $a = (multiply($v1, $time));
          $b = (multiply(sqaure($time), sqaure($acceleration)));
          $c = (divide($b, 2));
          calculate($a + $c);
       }
       //if all 3 are present
       if($v1 >= 0 and $v2 >= 0 and $time >= 0) { 
          $a = ($v1 + $v2);
          calculate((divide($a, 2)) * $time);
       }
    }
   
   
    /* 
    physics 
    */
   
    function kinematics_calculator($distance, $v1, $v2, $time) { 
       $velocity = ($v1 + $v2); //stored if required
       
       if($time >= 0) {
          $acceleration = (($v1 - $v2) / $time);
       }
           
       if($distance == null) { 
          calculate("Distance", distance($v1, $v2, $time));
       }
       
       if($velocity == null) { 
          calculate("
       
       
}
