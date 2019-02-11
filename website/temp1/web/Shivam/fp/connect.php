<?php
$con=mysqli_connect('localhost','root','') or die('Cannot connect to server');
mysqli_select_db($con,"facultyprofile") or die ('Cannot found database');
?>