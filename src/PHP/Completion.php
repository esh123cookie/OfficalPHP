<?php 

class Calculator {
    
    function getTutorial() {
        return true;
    }
    
    function isComplete() : string{
	    return getTutorial() ? true : false;
    }
    
    if(isComplete()) { 
        
       echo("done");
       echo(getTutorial());
    }else{ 
       echo("notCompleted tutorial");
       
    }
}
