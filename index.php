<?php
//  include './library/maths/mathsA.php'; //taskA
 

 // set_include_path('.library\maths');//taskC
echo get_include_path().PHP_EOL; 
set_include_path ('library/maths/');
echo get_include_path().PHP_EOL;   
//include './library/maths/mathsB.php'; //taskB
include 'mathsB.php';
use function library\maths\doMathsB;


$operator=0;      
while ($operator!=5){
    
    echo "type a number:";
       $first = stream_get_line(STDIN, 100, PHP_EOL);
    echo "type a second number";
        $second = stream_get_line(STDIN, 100, PHP_EOL);
    echo "type an operator:", "\n";
    echo   "1 for addition","\n";
    echo   "2 for subtraction","\n";
    echo   "3 for multiplication","\n";
    echo   "4 for division","\n";
    echo   "5 for quit","\n"; 
        $operator = stream_get_line(STDIN, 100, PHP_EOL);
    //return array ($first,$second,$operator); //no reason return here as no function here

    //doMathsA($first,$second,$operator); //taskA
  
  
 doMathsB($first,$second,$operator);           
}     
   

//works as expected.