<?php



$class = "A0318G";

function checkClass( $class)
{
    $pattern = "/^[CAP][0-9]{4}[GHIKLM]$/";
    if (preg_match($pattern, $class)){
        echo $class."<br>"."hop le";
    }else{
        echo $class."<br>"."khong hop le";
    }
}

checkClass( $class);