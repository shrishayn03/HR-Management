 <?php
		session_start();
	$con = mysqli_connect("localhost","root","","hr");
    if(isset($_POST['submit'])){
		
	    $empno = $_POST["empno"];
		$name = $_POST["name"];
		$address = $_POST["address"];
		
		$designation = $_POST["designation"];
		$dor = $_POST["dor"];
		
		
		
		
		
		$sql= "INSERT INTO releve_letter (id,empno,name,address,designation,dor) VALUES ('','$empno','$name','$address','$designation','$dor')";

		
		
if (mysqli_query($con, $sql)) {
    $_SESSION['message']="Releve Letter Has Been Created";
	header("Location: release_letter.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
		
		
	}
	
	?>