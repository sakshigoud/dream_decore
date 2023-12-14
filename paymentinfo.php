
<?php 

 $con = mysqli_connect("localhost","root","","dream_decor");

 if (!$con) {
  die('could not connect'.mysql_error());
 }

 $name= $_POST['name'];
 $email = $_POST['email'];
 $card_name = $_POST['card_name'];
 $card_number= $_POST['card_number'];
 $cvc= $_POST['cvc'];
 
 
 $sql = "INSERT INTO paymentinfo (name,email,card_name,card_number,cvc) values ('$name','$email','$card_name','$card_number','$cvc')";

if (mysqli_query($con, $sql)){
    echo"recorded successfully";
}else{
    echo "Error:".mysqli_error($con);
}
  mysqli_close($con);