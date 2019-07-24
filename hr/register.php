 <?php
		session_start();
	$con = mysqli_connect("localhost","root","","hr");
    if(isset($_POST['submit'])){
		
		$empno = $_POST["empid"];
		$mobile = $_POST["mobile"];
		$name = $_POST["name"];
		$gender = $_POST["gender"];
		$per_add = $_POST["per_add"];
		$loc_add = $_POST["loc_add"];
		$city = $_POST["city"];
		$acc = $_POST["acc"];
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
		
		
		
		$sql= "INSERT INTO emp_information (empid,empno,name,mobno,per_add,loc_add,city,designation,gender,department,doj,modee,dob,emailid,bloodgroup,total_salary,photo) VALUES 
		('','$empno','$name','$mobile','$per_add','$loc_add','$city','$designation','$gender','$department','$doj','$mode','$dob','$email','$bg','$total_salary','$image')";

		
		
if (mysqli_query($con, $sql)) {
   $_SESSION['message']="Emplyoee Has Been Successfully Registered";
	header("Location: emplyoee_registration.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
		
		
	}
	
	?>