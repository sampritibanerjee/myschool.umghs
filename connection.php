<?php
$name=$_POST['na'];
$mobile=$_POST['mo'];
$email=$_POST['me'];
$guardianname=$_POST['guardianname'];
$class=$_POST['class'];
$localguardianname=$_POST['local guardian name'];
$age=$_POST['age'];
$city=$_POST['city'];
$dob=$_POST['dob'];
echo("your name is ".$name." email is ".$email." mobile is ".$mobile "guardian name is".$guardianname "class is" .$class "local guardian name is" .$localguardianname  "age is" .$age "current city is ".$city "DOB is".$dob);
$connection=mysqli_connect("localhost","id16762279_sampriti","ThDW-a#x3OSIYCTJ","id16762279_db220521");
$insert="INSERT INTO th220521 SET name='$name',email='$email', mobile='$mobile',guardian name='$guardianname',class='$class',	local guardian name	='$localguardianname',age='$age',city='$city',dob='$dob'   ";
$connection ->query($insert);

?>