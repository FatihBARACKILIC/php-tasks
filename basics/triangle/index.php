<?php

function triangle($lineCount){
    for($i = 0; $i <= $lineCount; $i++){
        $k = 0;
        while($k <= $i){
            echo "0 ";
            $k++;
        }
        echo "<br>";
    }
}

triangle(15);
