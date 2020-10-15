<?php
  require ("connect.php");
  session_start();
  if(!isset($_SESSION))
	{
		header('location:adminlogin.php');
		exit;
	}
  $success="";
  $mail=$_SESSION['mail'];     
  $select = "Select student_id,name,sub1,sub2,sub3,totalobtained,percent FROM marks,students where students.id=marks.student_id"; 
  $result1 = mysqli_query($conn, $select);
 
  if (mysqli_num_rows($result1) > 0) {
       
  
    }
    else echo "Error";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>td,h1,div{
    text-align: center;
    }</style>
</head>
<body>
    <h1>Welcome Admin</h1>
    <table border="2" cellpadding="15"   style="width: 100%; border-collapse: collapse; margin:0 auto">
      <thead>
        <tr>
          <th>Name</th>
          <th>HTML</th>
          <th>PHP</th>
          <th>MYSQL</th>
          <th>Total_ Obtained</th>
          <th>Percentage</th>
        </tr>
      </thead>
      <tbody>
        <tr>
        <?php
                while($row = mysqli_fetch_assoc($result1)){?>
                <tr>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['sub1']; ?></td>
                    <td><?php echo $row['sub2']?></td>
                    <td><?php echo $row['sub3']; ?></td>
                    <td><?php echo $row['totalobtained'];?></td>
                    <td><?php echo $row['percent']; ?></td>
                    <?php $student_id=$row['student_id'] ?>
                    <td><a href="edit.php?_id=<?php echo $student_id ?>">Edit</a> | <a href="delete.php?_id=<?php echo $student_id ?>">Delete</a></td>";
                <tr>
                <?php } ?>
        </tr>
      </tbody>
    </table>
    <div style="padding: 100px;">
    <a href="addstudent.php"><button>Add a new student</button></a>
    </div>
    <h1 ><?php echo $success ?></h1>
    <a style="position:absolute; top:1em ;right:1em;" href="logout.php"><button>Logout</button></a>
</body>
</html>