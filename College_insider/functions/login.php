<?php
	require '../connection.php';
	session_start();
	$user_id=$_POST['user_id'];
	$password=$_POST['password'];
	$sql = "SELECT `user_id`, `fname`, `lname`,`type` FROM `user` WHERE user_id='$user_id' AND password='$password'";
	$result = $conn->query($sql);
	if ($result->num_rows>0) {
		$row = $result->fetch_assoc();
		if($row['type']=='student')
		{
			$_SESSION['id']=$row['user_id'];
			$_SESSION['fname']=$row['fname'];
			$_SESSION['type']=$row['type'];
			echo "successful";
			//ader('Location: ../dmin.php');
		}
		// elseif($row['type']=='student')
		// {
		// 	$_SESSION['id']=$row['userid'];
		// 	$_SESSION['fname']=$row['fname'];
		// 	$_SESSION['type']=$row['type'];
		// 	echo "succeful";
		// 	// header('Location: ../student/student.php');
		// }
		//  else
		//  {
		//  	header('Location: ../login.php?error="Invalid Credentials"');
		//  }
	}
	else
	{
		//echo "Error: " . $sql . "<br>" . $conn->error;
		echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Invalid Credentials!!!')
			window.location.href='../login.php';
			</SCRIPT>");
	}
?>
