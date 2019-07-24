 <?php
		session_start();
	$con = mysqli_connect("localhost","root","","hr");
    if(isset($_POST['submit'])){
		
	    $empno = $_POST["empno"];
		$name = $_POST["name"];
		$address = $_POST["address"];
		$type = $_POST["type"];
		$designation = $_POST["designation"];
		$doj = $_POST["doj"];
		
		
		
		
		
		$sql= "INSERT INTO offer_letter (id,empno,name,address,job_type,designation,doj) VALUES ('','$empno','$name','$address','$type','$designation','$doj')";

		
		
if (mysqli_query($con, $sql)) {
   $_SESSION['message']="Offer Letter Has Been Added";
	header("Location: Offer_letter.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
		
		
	}
	
	?>