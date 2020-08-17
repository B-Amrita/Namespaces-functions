<?php

namespace library\maths {

function doMathsB($first,$second,$operator){
    switch ($operator){
        case "1":
            $result1 = $first+$second;
            echo $result1.PHP_EOL;
            break;
        case "2":
            $result2 = $first-$second;
            echo $result2.PHP_EOL;
            break;
        case "3":
            $result3 = $first*$second;
            echo $result3.PHP_EOL;
            break;
        case "4":
            $result4 = $first/$second;
            echo $result4.PHP_EOL;
            break;
        case "5":
            echo "End of game";
            die;
}
}
}
    
//echo \library\maths\doMathsB;