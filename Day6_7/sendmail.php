<?php
    require ("connect.php");
    session_start();
    $success="";
    $mail=$_SESSION['mail'];  
    $sname=$_SESSION['user'];   
    $select = "Select * FROM marks,students where students.id=marks.student_id AND students.email='$mail'"; 
    $result1 = mysqli_query($conn, $select);
    if(isset($_POST['parent_submit'])){ 
        $parent_email=(isset($_POST['parent_email']) ? $_POST['parent_email'] : null );
        if (mysqli_num_rows($result1) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result1)) {
            $subject1=$row["sub1"];
            $subject2=$row["sub2"];
            $subject3=$row["sub3"];
            $totalobtained=$row['totalobtained'];
            $percent=$row['percent'];
            
            $to=$parent_email;
            $subject="$sname Marksheet";
            $headers="From: ritu2912@gmail.com";
            nl2br("New line will start from here\n in this string\r\n on the browser window");
            $body=" HTML : $subject1 \n PHP : $subject2 \n MYSQL : $subject3 \n Total_ : $totalobtained \n Percentage : $percent";            
            mail($to,$subject,$body,$headers);      
            echo "Mail sent";      
            }    
        }                  
    }
    else echo "Please input all the parameters";
      
    ?>