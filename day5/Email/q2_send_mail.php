<!-- #Sending Email
Create a Feedback form which is used to take the feedback along with the following
Information: Name and Email ID. After the successful submission of the form by the user, a
mail is sent to the user thanking him for his feedback and another mail is to be sent to the
administrator consisting of the information provided by the user ie. Name, Email and
Feedback. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
</head>
<body>
    <form action="q2_send_mail.php" method="post" style="width: 33%;">
        <fieldset>
            <legend>Feedback form:</legend>
            Name    : <input type="text" name="name" id="name"><br><br>
            Email ID: <input type="email" name="email" id="email"><br><br>
            Feedback  : <br><br>
            <textarea name="feedback" id="feedback" name="feedback" cols="30" rows="5"></textarea><br><br>
            <input type="submit" value="send" name="submit">
        </fieldset>
    </form>
</body>
</html>
<?php
    //send me an email script
    if(isset($_POST['submit'])){
        $admin = "blessythomas20000@gmail.com";
        $name = $_POST['name'];
        $to = $_POST['email'];
        $subject = "Feedback response";
        $feedback = $_POST['feedback'];
        $message = "Hello, $name thanks for filling the form. Here, is the copy of your feedback:\n".$feedback;
        $headers = "From: blessythomas20000@gmail.com";
        

        $userheader= "From: $to";
        $msg = "Feedback response from $name ($to):\n $feedback";
        if($name && $to && $feedback){
            mail($to,$subject,$message,$headers);
            echo "Mail send successfully.";
            mail($admin,$subject,$msg,$userheader);
        }
        else
            die("Please your enter $name, $to,and $feedback");
        

    }
?>