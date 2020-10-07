<!-- #PHP String Functions
Create a PHP Script which asks for user to enter some random string. Use the appropriate
string functions to display the following operation on the input string.
1. Count number of Characters in the string
2. Breaking down a string into an array
3. Reverse the string
4. Convert all alphabetic characters in string to their lower case form.
5. Convert all alphabetic characters in string to their upper case form.
6. Declare a substring and replace the content of substring into original string. -->

<!DOCTYPE html>
<html lang="en">
<body>
    <form action="q2_string_functions.php" method="post">
        <label>Enter the string:  </label>
        <input type="text" name="str" id="str"><br><br>
        <label>Enter a substring: </label>
        <input type="text" name="substr" id="substr"><br><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>
<?php
    if(isset($_POST['submit'])){
        $string =$_POST['str'];
        echo "Enter the string: ".$string."<br>";

        $substring =$_POST['substr'];
        echo "Enter the substring: ".$substring."<br>";

        if(empty($string) && empty($substring))
            echo "string and substring empty.";
        else{
            $count = strlen($string);
            echo "count: ".$count."<br><br>";

            echo "Breaking down a string into an array <br>";
            print_r(explode(" ", $string));
            echo "<br><br>";

            $reverse = strrev($string);
            echo "reversed string: ".$reverse."<br><br>";

            echo "string to their lower case form: ".strtolower($string)."<br><br>";

            echo "string to their upper case form: ".strtoupper($string)."<br><br>";

            echo "replace the content of substring into original string: ".substr_replace($string,$substring,strlen($string)-1);
       }
    }
?>