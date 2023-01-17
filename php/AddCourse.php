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
<?php
    if(isset($_POST['insert'])){
    // $filename=$_FILES['fileToUpload']['name'];
    //  $filetempname=$_FILES['fileToUpload']['tmp_name'];
    //  $folder="../images/";
    //  move_uploaded_file($filetempname,$folder.$filename);
     
     $naeme=$_POST['CourseNamee'];
   $num=  $_POST['NumberOfHourss'];
    $star= $_POST['StartDatee'];
    $end= $_POST['EndDatee'];
    $ins= $_POST['Institutionn'];
    $att= $_POST['Attachmentt'];
    $ur= $_POST['Urll'];
    $no=   $_POST['Notess'];

    $sql=" INSERT INTO courses(
    courseName,
    NumberOfHours,
    StartDate,
    EndDate,
    Institution,
    Attachment,
    Url,
    File,
    Notes
    )
     VALUES(
      '$naeme',
     '$num',
      '$star',
      '$end',
      '$ins',
      '$att',
     '$ur',
     '$filename',
     '$no'

        
    )";
    if(!mysqli_query($conn,$sql)){
        echo "true";
    }
}
 
   ?>
<nav > 
        <ul>
            <li ><a  href="Home.php"  >Personal Information</a> </li>
            <li><a href="ViewCourses.php">Course Information</a></li>
            <li><a href="ViewExperience.php">Exprience Information</a></li>
            <li ><a  class="active" href="AddCourse.php">Add Course</a></li>
            <li><a href="AddExperience.php">Add exprience </a></li>
       </ul>
       <img  src="../images/p1.png">
    </nav>
<div class="main">

    <img class="images3" src="../images/p3.png">
    <div class="div">
    <form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <table class="tab">
            <tr>
            <td><label for="Course Name" >Course Name:</label></td>
            <td><input type="text" name="CourseNamee" required="required"> </td>
        </tr>
        <tr>
       <td> <label for="Course Name" size="50">Number Of Hours:</label></td>
	    <td> <input type="Number" name="NumberOfHourss" required="required" > </td>
       </tr>
       <tr>
           <td><label for="Start Date">Start Date:</label></td>
           <td><input type="datetime-local" name="StartDatee" required="required"></td>
      </tr>
      <tr>
           <td><label for="End Date">End Date:</label></td>
           <td><input type="datetime-local" name="EndDatee" required="required" ></td>
      </tr>
      <tr>
            <td><label for="Institution" >Institution:</label></td>
            <td><input type="text" name="Institutionn"> </td>
        </tr>
      <tr>
           <td><label for="Attachment">Attachment:</label></td>
           <td><input type="radio" name="Attachmentt"  >File
             <input type="radio" name="Attachmentt"  >Url</td>
      </tr>
      <tr>
           <td><label for="url">URL:</label></td>
           <td><input  name="Urll" required="required"></td>
      </tr>
      <tr>
           <td><label for="File">File:</label></td>
           <td><input type="file" name="fileToUpload"  id="fileToUpload"></td>
      </tr>
      <tr>
           <td><label for="Notes">Notes:</label></td>
           <td><textarea name="Notess"  class="Notes"></textarea></td>
      </tr>
      
    
    </table>
     <div class="but">
      <input type="submit" name="insert" class="save" value="Save">
	      <input type="reset" name="reset" class="rest"> 
     </div>
  </form>
     </div>
  
    </div>
    
</body>
</html>