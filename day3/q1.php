<!DOCTYPE html>
<html>
<body>

<form method="post" action="q1.php">
Name of the Student:<input type="text" name="Name"><br>
Subject 1:          <input type="text" name="sub1"><br>
Subject 2:          <input type="text" name="sub2"><br>
Subject 3:          <input type="text" name="sub3"><br>
Subject 4:          <input type="text" name="sub4"><br>
Subject 5:          <input type="text" name="sub5"><br>
        <input type="submit" value="Submit" name="submit">
</form>

<?php
    require "connect.php";
    
    if ($_SERVER['REQUEST_METHOD']=="POST") {
        //grab POST data
        $name = $_POST['Name'];
        $sub1 = $_POST['sub1'];
        $sub2 = $_POST['sub2'];
        $sub3 = $_POST['sub3'];
        $sub4 = $_POST['sub4'];
        $sub5 = $_POST['sub5'];

        $total = $name + $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
        $percentage =($total/500)*100;

        echo "Name of the Student: ".$name."<br>";
        echo "Marks in each Subject <br>";
        echo "Subject 1:".$sub1."<br>";
        echo "Subject 2:".$sub2."<br>";
        echo "Subject 3:".$sub3."<br>";
        echo "Subject 4:".$sub4."<br>";
        echo "Subject 5:".$sub5."<br>";

        echo "Total marks Obtained: ".$total."<br>";
        echo "Total marks: 500<br>";
        echo "Percentage: ".$percentage."<br>";

        $sql = "INSERT INTO class1 (Name, sub1, sub2, sub3, sub4, sub5, total_obtained, total_marks, percentage) VALUES('$name',$sub1,$sub2,$sub3,$sub4,$sub5,$total,500,$percentage)";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
        
    }
?>

</body>
</html>