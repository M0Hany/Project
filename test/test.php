<?php
    $val="123@@@@@abcdw";
    $patternspecial="/[$!^(){}?\[\]<>~%@#&*+=_-]{1,}/i";
    $patternchar="/\w{5,}/i";
    $patternnums="/\d{1,}/";
    if(!preg_match($patternspecial,$val)){
        echo "The password must <br> contains at least 1 special character";
    }else if(!preg_match($patternchar,$val)){
        echo "The password must <br> contains at least 5 characters";
    }else if(!preg_match($patternnums,$val)){
        echo "The password must <br> contains at least 1 number";
    }
?>