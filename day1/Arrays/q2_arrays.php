  
<?php
    $first=array(array(1,3),
                array(4,5));
    $second=array(array(1,2),
                array(4,1));
    echo "Addition Of Two Matrix <br>";

    for($i=0;$i<=1;$i++)
    {
        for($j=0;$j<=1;$j++)
        {
            echo $first[$i][$j] + $second[$i][$j]." ";
        }
        echo"<br>";
    }
?>