<?php
if(isset($_POST["register"])){
$fname=$_POST["first-name"];
$lname=$_POST["last-name"];
$email=$_POST["email-mobile"];
$pass=$_POST["up-password"];
$gender=$_POST["gen"];
$birthd=$_POST["birth-day"];
$birthm=$_POST["birth-month"];
$birthy=$_POST["birth-year"];
echo "first name is: $fname <br> last name is: $lname<br> email or phone is: $email<br> password is: $pass<br> Birthday is: $birthd/$birthm/$birthy <br> gender is: $gender";
}else{
  echo "erorr 404";
}

?>