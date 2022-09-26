<?php  
include_once 'database.php';
if(isset($_POST['save']))
{
	$First_Name = $_POST['First_Name'];
	$Middle_Name = $_POST['Middle_Name'];
	$Last_Name = $_POST['Last_Name'];
	$Age = $_POST['Age'];
	$Phone_Number = $_POST['Phone_Number'];
	$Email = $_POST['Email'];
	$Qualification = $_POST['Qualification'];
	$Address_1 = $_POST['Address_1'];
	$Address_2 = $_POST['Address_2'];
	$s_state = $_POST['s_state'];
	$City = $_POST['City'];
	$Pincode = $_POST['Pincode'];
	$Country = $_POST['Country'];
	$About_Yourself = $_POST['About_Yourself'];

	$sql = "INSERT INTO register (First_Name,Middle_Name,Last_Name,Age,Phone_Number,Email,Qualification,Address_1,Address_2,s_state,City,Pincode,Country,About_Yourself)
	VALUES('$First_Name','$Middle_Name','$Last_Name','$Age','$Phone_Number','$Email','$Qualification','$Address_1','$Address_2','$s_state','$City','$Pincode','$Country','$About_Yourself')";

	if (mysqli_query($conn,$sql)) {
		echo "Registered Successfully!";
	}
	else {
		echo "Error:".$sql."".mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>