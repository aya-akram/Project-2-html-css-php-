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
    <?php
// // sql to create table
// $sql = " CREATE TABLE user (
     //   User_id Int
//     FullName VARCHAR(30) ,
//     Gender VARCHAR(30),
//     BirthDate Date,
//     Nationalitiy VARCHAR(30) ,
//     JobTitle VARCHAR(30) ,
//     PlaceOfBirth VARCHAR(30) ,
//     YearOfExprinces INT(6),
//     ) ";
// if (mysqli_query($conn, $sql)) {
// echo "Table personal created successfully";
// } else {
// echo "Error creating table: " . mysqli_error($conn);
// }
// mysqli_close($conn);

// $sql2="insert into user  (fullName ,Gender,birthDate,Nationalitiy,jobTitle,placeOfBirth,yearOfExprinces )
// values('aya','famale',19-7-2001,'palestinine','front end developer','gaza','3')

       
    ?>
   
<nav > 
        <ul>
            <li ><a class=" active" href="Home.php"  >Personal Information</a> </li>
            <li><a href="ViewCourses.php">Course Information</a></li>
            <li><a href="ViewExperience.php">Exprience Information</a></li>
            <li><a href="AddCourse.php">Add Course</a></li>
            <li><a href="AddExperience.php">Add exprience </a></li>
       </ul>
       <img  src="../images/p1.png">
    </nav>
    
    <div>
        <h1>Personal information</h1>
    </div>
    <div class="personal">
    <table class="tableinfo">
        <tr>
            <?php //while($row = mysqli_fetch_assoc($result));     
            $result=mysqli_query($conn,"select * from users");
            $row = mysqli_fetch_assoc($result);
            ?>
            <td class="colum1">Full Name</td>
            <td class="colum2"><?php echo $row["FullName"];  ?></td>
        </tr>
        <tr>
            <td class="colum1">Gender</td>
            <td class="colum2"><?php echo $row["Gender"];  ?></td>
        </tr>
        <tr>
            <td class="colum1">Birth Date</td>
            <td class="colum2"><?php echo date('d M Y', strtotime($row["BirthDate"])); ?></td>
        </tr>
        <tr>
            <td class="colum1" >Nationalitiy</td>
            <td class="colum2"><?php echo $row["Nationalitiy"];  ?></td>
        </tr>
        <tr>
            <td class="colum1">Place of birth</td>
            <td class="colum2"><?php echo $row["PlaceOfBirth"];  ?></td>
        </tr>
        <tr>
            <td class="colum1">Gob title</td>
            <td class="colum2"><?php echo $row["JobTitle"];  ?></td>
        </tr>
        <tr>
            <td class="colum1">Year of exprience</td>
            <td class="colum2"><?php echo $row["YearOfExprinces"];  ?></td>
        </tr>
        
</table>
</div>
     <div class="images">
     <img id="p2"  src="../images/p2.png">

</div>
    
</body>
</html>
