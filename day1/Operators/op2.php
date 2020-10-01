<!--  Write a PHP Script to declare 2 variables with specific numeric value of your choice and find out
the greater number between the two. If the numbers are equal, the respective message must
appear on the screen. -->

<?php
    $a =10;
    $b =11;
    if($a > $b)
        echo("$a is greater $b");
    elseif ($a < $b) 
        echo("$b is greater $a");
    else
        echo("the numbers are equal");
?>