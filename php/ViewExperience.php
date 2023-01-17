<?php require_once("file.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Style.css">
    <title>Document</title>
</head>
<body>
<nav > 
        <ul>
            <li ><a  href="Home.php"  >Personal Information</a> </li>
            <li><a href="ViewCourses.php">Course Information</a></li>
            <li ><a class="active" href="ViewExperience.php">Exprience Information</a></li>
            <li><a href="AddCourse.php">Add Course</a></li>
            <li><a href="AddExperience.php">Add exprience </a></li>
       </ul>
       <img  src="images/p1.png">
    </nav>
    <div class="div3">
        <h1>All Experiance Information</h1>
        <br>
        <?php $result=mysqli_query($conn,"select * from experience");
        while($row=mysqli_fetch_assoc($result)){ ?>
        <h2 class="web"><?= $row["expriencesTitle"] ?> <sub><?= $row["Institution"] ?>|<?= $row["expriencesCategory"] ?> </sub></h2>
        <p class="from">from <?php echo date('M Y', strtotime($row["startMonth"])) ?> to <?php echo date('M Y', strtotime($row["endMonth"])) ?></p>
        <p class="work"><?= $row["Description"] ?></p>
        
       <?php }?>
    </div>



         
    
</body>
</html>