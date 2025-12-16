<?php
function colle($x, $y) {

 for($i = 0 ; $i < $x ; $i++ ) {

        for($j = 0 ; $j < $y ; $j++) {

            if (($i == 0 && $j == 0) || ($i == 0 && $j == $y - 1) ||
                ($i == $x - 1 && $j == 0) || ($i == $x - 1 && $j == $y - 1)) {
                echo "○";
            }    

            elseif($i == 0 || $i == $x-1 ) {
            echo "-";
            }

            elseif( $j ==0 || $j == $y-1) {
                echo "|";
            }

            else{
                echo " ";
            }
        }
        echo "\n";
    }
}
$x = $argv[1]; 
$y = $argv[2]; 
colle($x, $y);