<!-- #MD5 Encryption
Use the md5 function to encrypt the password entered by the user in a form which submits
the user name and the password of the user and stores the encrypted password along with the
username in a database named data1. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Md5 Encryption</title>
</head>
<body>
    <form action="q1_md5.php" method="post">
        Username: <input type="text" name="uname" id="uname"><br><br>
        Password: <input type="password" name="pwd" id="pwd"><br><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>
<?php
    require("connect.php");
    if(isset($_POST['submit'])){
        
        $username_form = $_POST['uname'];
        $password = $_POST['pwd'];
        $encryptpwd = md5($password);

        if (empty($username_form) && empty($password)) {
            echo "Pls enter your username and pwd";
        }
        else{
            $extract = mysqli_query($conn,"SELECT * FROM md5_encrypt WHERE username='$username_form'");
            while ($rows = mysqli_fetch_assoc($extract)) 
            {
                $username = $_POST['uname'];
            }
            if($username == $username_form)
                    echo "username exists already!!";
            else{
                    $sql = mysqli_query($conn,("INSERT INTO md5_encrypt(username,password) VALUES ('$username_form','$encryptpwd')"));
                    echo "Credentials stored successfully!!";
            }
        }
    }
    
?>