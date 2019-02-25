<?php
require '../connection.php';
$user_id=$_POST['user_id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
$mobile_no=$_POST['mobile_no'];
$gender=$_POST['gender'];
$dept=$_POST['dept'];
$id_image=$_POST['fileupload'];



$sql = "INSERT INTO `user`(`user_id`, `fname`, `lname`, `email`,`password`,`mobile_no`,`gender`,`dept`, `type`, `status`,`id_image`)
VALUES ('$user_id','$fname','$lname','$email','$password','$mobile_no','$gender','$dept','student','in-active','$id_image')";

if ($conn->query($sql) === TRUE) {

  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Registered!!! Ask Admin to Activate your account.')
    window.location.href='../login.php';
    </SCRIPT>");
  //  echo "New record created successfully";
  // header('Location: ../login.php');
} else {
   echo "Error: " . $sql . "<br>" . $conn->error;
    // echo ("<SCRIPT LANGUAGE='JavaScript'>
    //   window.alert('Inavalid details!!')
    //   window.location.href='../student/register.php';
    //   </SCRIPT>");
}

$conn->close();
?>
