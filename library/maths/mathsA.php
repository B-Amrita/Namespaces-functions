<?php

function doMathsA($first,$second,$operator){
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
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

