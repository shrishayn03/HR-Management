 <?php
 session_start();
 $con = mysqli_connect("localhost","root","","hr");
         if(isset($_GET['delete'])) {
			 
			  $id = $_GET['delete'];
			  $sql = "DELETE FROM emp_information WHERE empid = $id" ;
			 
			 if (mysqli_query($con, $sql)) {
    $_SESSION['message']="Emplyoee Has Been Deleted";
	header("Location: view.php");
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
			 
		 }
		 ?>