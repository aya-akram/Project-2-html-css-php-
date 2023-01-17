<?php
$conn=mysqli_connect("localhost","root","") or die(mysqli_error($conn));
mysqli_select_db($conn,"project1") or die(mysqli_error($conn));
?>