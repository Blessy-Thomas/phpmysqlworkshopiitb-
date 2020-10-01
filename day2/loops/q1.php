<?php
    $row_len = 5;
    for($row=0;$row<$row_len;$row++)
    {
        for($column=0;$column<$row_len-$row;$column++)
        {
            echo "*";
        }
        echo '<br>';
    }
?>