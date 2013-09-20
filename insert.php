<?php

$id='0';
$name=$_POST['name'];
$email=$_POST['email'];
$school=mysql_real_escape_string($_POST['school']);
$gender=$_POST['gender'];
$phone=$_POST['phone'];


$link = mysqli_connect('localhost', 'root', '');

if(!$link)
	{
		echo "Unable to connect to the database";
		exit();
	}

	if(!mysqli_select_db($link,'y4it'))
	{
		echo "Unable to locate the database";	
		exit();
	}
$sql="Insert into reg values($id,'$name','$email','$school','$gender','$phone',now())";
$result=mysqli_query($link,$sql);


	if(!$result)
	{
		echo "<h1 class='error msg'>SQL error: " . mysqli_error($link)."</h1>";
		exit(); 
	}
	else{

		echo "<h1 class='success msg'>Thank you! Please clear the form.</h1>";
	}
?>



