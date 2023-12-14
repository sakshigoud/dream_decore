<?php 

 $con = mysqli_connect("localhost","root","","dream_decor");

 if (!$con) {
  die('could not connect'.mysql_error());
 }
  

 $person = $_POST['person'];
 $gender = $_POST['gender'];
 $email = $_POST['email'];
 $address = $_POST['address'];
 $function_name= $_POST['function_name'];
 $date = $_POST['date'];
 $place = $_POST['place'];
 $decoration_type = $_POST['decoration_type'];
 $food = $_POST['food'];
 $contact = $_POST['contact'];
 
 $sql = "INSERT INTO bookinginfo (person,gender,email,address,function_name,date,place,decoration_type, food, contact) values ('$person','$gender','$email','$address','$function_name','$date','$place','$decoration_type','$food','$contact')";

if (mysqli_query($con, $sql)){
    echo"recorded successfully";
}else{
    echo "Error:".mysqli_error($con);
}
  mysqli_close($con);
  ?>