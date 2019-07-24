<?php
session_start();
$con = mysqli_connect("localhost","root","","hr"); 

 if(isset($_POST['update']))
 {
	 $id=$_POST["id"];
		$empno = $_POST["empid"];
		$mobile = $_POST["mobile"];
		$name = $_POST["name"];
		$gender = $_POST["gender"];
		$per_add = $_POST["per_add"];
		$loc_add = $_POST["loc_add"];
		$city = $_POST["city"];
	
		$dob = $_POST["dob"];
		$email = $_POST["email"];
		$department = $_POST["dp"];
		$doj = $_POST["doj"];
		$mode = $_POST["mode"];
		$designation = $_POST["designation"];
		$bg = $_POST["bg"];
		$total_salary = $_POST["rupees"];
		 $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];

		 move_uploaded_file($image_tmp,"image/$image");
	


$result = "update emp_information SET empno='$empno',name='$name',mobno='$mobile',per_add='$per_add',loc_add='$loc_add',city='$city',designation='$designation',gender='$gender',department='$department',doj='$doj',modee='$mode',dob='$dob',emailid='$email',bloodgroup='$bg',total_salary='$total_salary',photo='$image' where empid='$id'";
$r1=mysqli_query($con,$result);	
	
if($r1==1)
{
	$_SESSION['message1']="Emplyoee Record Has Been Updated";
	header("Location: view.php");
}
	else
		{
	$_SESSION['message1']="Emplyoee Record Has Not Been Updated";
	header("Location: view.php"); 
}
		
 }

?>