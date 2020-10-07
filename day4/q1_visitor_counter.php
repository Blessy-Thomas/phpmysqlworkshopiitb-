
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visit Counter</title>
</head>
<body>
    <?php
        require("connect.php");
        $sql = "UPDATE counter SET visits = visits+1 WHERE id=1";
        mysqli_query($conn,$sql);

        $sql = "SELECT * FROM counter WHERE id=1";
        $result = mysqli_query($conn,$sql);
        $numrows = mysqli_num_rows($result);
        if ($numrows>0) {
            while($row = mysqli_fetch_assoc($result)){
                $visits = $row['visits'];
            }
            echo "Visits: ".$visits;
        }
        else
            echo "no results<br>"; 
    ?>

</body>
</html>