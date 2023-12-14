<?php 

 $con = mysqli_connect('localhost','root');
  
if($con) {
  	echo "Connection Succesfull";
}else{
  	echo "Not Connection";
}
mysqli_select_db($con, 'dream_decor');

$person = $_POST['person'];
$number = $_POST['number'];
$comment = $_POST['comment'];

$query = "insert into probleminfo (person, number, comment) values ('$person','$number','$comment')";
 echo "$query";
 mysqli_query($con, $query);
 header('location:problem.php');
 ?>