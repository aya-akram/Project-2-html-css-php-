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
            <li ><a  class="active" href="ViewCourses.php">Course Information</a></li>
            <li><a href="ViewExperience.php">Exprience Information</a></li>
            <li><a href="AddCourse.php">Add Course</a></li>
            <li><a href="AddExperience">Add exprience </a></li>
       </ul>
       <img  src="../images/p1.png">
    </nav>
	<div class="div2">
        <h1>All Courses Information </h1>
        <br>
        <table border="1" class="tablecourse">
            <tr class="tableheder">
                <th rowspan="2"># </th>
                <th rowspan="2" id="c"> Course Name</th>
                <th rowspan="2">Total Hours</th>
                <th colspan="2" id="c">Date</th>
                <th rowspan="2" id="c">Institution</th>
                <th rowspan="2">Attachment</th>
                <th rowspan="2">Notes</th>
            </tr>
            <tr class="tableheder">
                <th id="c">From</th>
                <th id="c">To</th>
            </tr>
        
            <?php //while($row = mysqli_fetch_assoc($result));  
            session_start();  
            $result=mysqli_query($conn,"select * from courses");          
            while($row=mysqli_fetch_assoc($result)){  
                $_SESSION['CourseName'] = $row["CourseName"];    
            echo "<tr>";
            echo "<td>"; echo $row["CourseID"]; echo"</td>";
            echo "<td>"; echo $row["CourseName"]; echo "</td>";
            echo "<td>"; echo $row["NumberOfHours"]; echo "</td>";
            echo "<td>"; echo $row["StartDate"]; echo "</td>";
            echo "<td>"; echo $row["EndDate"]; echo "</td>";
            echo "<td>"; echo $row["Institution"]; echo "</td>";
            if(isset($row['Url'])) {
                echo "<td><a href='Course_View.php?ID="; echo $row["CourseID"]; echo "'>View</a></td>";}
            else{echo "<td><a href='Course_View.php'"; echo ">View</a></td>";}


            
                echo "<td>"; echo $row["Notes"]; echo "</td>";
                echo "</tr>";
        }
        
            ?>
        </table>
    </div>




</body>
</html>