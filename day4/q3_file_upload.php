<!-- #File upload
Create a file upload for and once uploaded display the information of the file uploaded (Ex.
File Name and File Size). -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Upload a file..</h1>
    <form action="q3_file_upload.php" method="post" enctype ='multipart/form-data'>
        <input type="file" name="fileToUpload" id ="fileToUpload"><br><br>
        <input type="submit" value="Upload" name="submit">
    </form>
</body>
</html>
<?php
    if(isset($_POST['submit'])){
        $name = $_FILES["fileToUpload"]["name"];
        $type = $_FILES["fileToUpload"]["type"];
        $size = $_FILES["fileToUpload"]["size"];
        $temp = $_FILES["fileToUpload"]["tmp_name"];
        // $error = $_FILES["fileToUpload"]["error"];
        // if(is_writable($temp))
        //     echo "true";
        $dir = "uploaded/";
        $target_file= $dir.$name;
        $uploadOk = 1;
        if(file_exists($target_file)){
            echo "Sorry, file already exists!!";
            $uploadOk = 0;
        }
        else{
                if(move_uploaded_file($temp,$target_file)) {
                    echo "file uploaded<br><br>";
                    echo "details of the file uploaded:<br>";
                    echo "file name:".$name."<br>";
                    echo "file size:".$size."<br>";
                    echo "file type:".$type."<br>";
                }
            }
    }
        
?>