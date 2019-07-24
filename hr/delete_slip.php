 <?php
 session_start();
 $con = mysqli_connect("localhost","root","","hr");
         if(isset($_GET['id'])) {
			 
			  $id = $_GET['id'];
			  $sql = "DELETE FROM salary WHERE id = $id" ;
			 
			 if (mysqli_query($con, $sql)) {
    $_SESSION['message']="Slip Record Has Been Deleted";
	header("Location: view_slip.php");
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
			 
		 }
		 ?>