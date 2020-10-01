<!-- If the three sides of a triangle are entered by the user, write a program to check whether the
triangle is isosceles, equilateral, scalene or right angled triangle. Use the 'Get' method to post the
form. -->
<!DOCTYPE html>
<html lang="en">
<body>
    <form action="q1.php" method="GET">
       a= <input type="text" name="a"><br>
       b= <input type="text" name="b"><br>
       c= <input type="text" name="c"><br>
       <input type="submit" value="check">
    </form>   
</body>
</html>

<?php
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];
    if ($a == $b && $b == $c && $c == $b) 
      echo "equilateral triangle";
    elseif($a == $b || $b == $c || $c == $b) 
      echo "isosceles triangle";
    else
        echo "scalene or right angled triangle";
?>