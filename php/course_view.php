<?php require_once("file.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/Style.css">
</head>
<body>
<nav > 
        <ul>
            <li calss="active"><a  href="Home.php"  >Personal Information</a> </li>
            <li><a href="ViewCourses.php">Course Information</a></li>
            <li><a href="ViewExperience.php">Exprience Information</a></li>
            <li><a href="AddCourse.php">Add Course</a></li>
            <li><a href="AddExperience.php">Add exprience </a></li>
       </ul>
       <img  src="../images/p1.png">
    </nav>

    <?php 
    $id=$_GET['ID'];
    $res= mysqli_query($conn,"select * from courses where CourseID=$id") ;
    $row=mysqli_fetch_assoc($res);
     ?>
    <div class="div4">
        <h1 class="div41">Course " <?= $row['CourseName']?> "</h1>
        <p class="experience">from <?= $row['StartDate']?> to <?= $row['EndDate']?>, totally <?= $row['NumberOfHours']?> training hours</p>
        <br>
        <p class="experience">Institution was " <?= $row['Institution']?> "</p>
    </div>

    <div class="img4">
      
        <!-- <img src= "<?php echo " ../images/".$row['File']; ?>" alt='this is pic'> -->
        <img src="../images/p5.png">
   
        

    </div> 
    </body>

</html>