<?php 
 $con = mysqli_connect("localhost","root","","dream_decor");

 if (!$con) {
  die('could not connect'.mysql_error());
 }

$Firstname = $_POST['firstname'];
$Middlename = $_POST['middlename'];
$Lastname= $_POST['lastname'];
$Gender = $_POST['gender'];
 $Phone = $_POST['phone'];
$Country_code= $_POST['country_code'];
$Email = $_POST['email'];
$Password= $_POST['pass'];
$Re-type password = $_POST['repass'];
$Address= $_POST['address'];
$Course = $_POST['course'];
$YEAR= $_POST['year'];

$sql = "INSERT INTO indexinfo(Firstname,Middlename,Lastname,Gender,Phone,Country_code,Email,Password,Re-type password,Address,Course,YEAR) values ('$firstname','$middlename','$lastname','$gender','$phone','$country_code','$email','$pass','$repass','$address','$course','$year')";
if (mysqli_query($con, $sql)){
    echo"recorded successfully";
}else{
    echo "Error:".mysqli_error($con);
}
  mysqli_close($con);
  ?>