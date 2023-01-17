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
            <li><a href="ViewExperience.php">Exprience Information</a></li>
            <li><a href="AddCourse.php">Add Course</a></li>
            <li ><a class="active" href="AddExperience.php">Add exprience </a></li>
       </ul>
       <img  src="../images/p1.png">
    </nav>
    <div class="main">
    <img class="images4" style="hight: 40px;" src="../images/p4.png">

    <div class="div1">
    <form method="post">
   
        <table class="tab11">
            <tr>
            <td><label for="Expriences Category" >Expriences Category:</label></td>
            <td><input  name="expriencesCategory" required="required" list="category" >  
                <datalist id="category">
                    <option value="Job">
                    <option value="Freelancer">
                    <option value="Volunteer">
                    <option value="Self-Learning">
                    <option value="Othors">
                </datalist>  </td>
        </tr>
        <tr>
        <td><label for="Expriences Title" >Expriences Title:</label></td>
            <td><input type="text" name="expriencesTitle" required="required"> </td>
       </tr>
       <tr>
           <td><label for="Start month">Start month:</label></td>
           <td><input type="datetime-local" name="startMonth" required="required"></td>
      </tr>
      <tr>
           <td><label for="End month">End month:</label></td>
           <td><input type="datetime-local" name="endMonth" required="required"></td>
      </tr>
      <tr>
            <td><label for="Institution" >Institution:</label></td>
            <td><input type="text" name="Institution" required="required"> </td>
        </tr>
      <tr>
           <td ><label class="" for="Description">Description:</label></td>
           <td><textarea class="Description" rows="10" cols="10" name="Description" ></textarea></td>
      </tr>
      
    </table>
    <div class="but">
      <input type="submit" name="insert" class="input" value="Save">
	      <input type="reset" name="reset" class="reset"> 
     </div>
  </form>
     </div>
  
    </div>
    </body>
    <?php
     if(isset($_POST['insert'])){
         mysqli_query($conn,"INSERT INTO experience values
         ('','$_POST[expriencesCategory]',
         '$_POST[expriencesTitle]',
         '$_POST[startMonth]',
         '$_POST[endMonth]',
         '$_POST[Institution]',
         '$_POST[Description]'
         )");
     }
     /* if(!$inserted){
         echo "insert failed";
     }else{
       echo "data inserted";
     } */
     //$startMonth=date('M YY', strtotime($_POST['startMonth']));
        //$endMonth=date('M YY', strtotime($_POST['endMonth']));
    ?>
</html>

