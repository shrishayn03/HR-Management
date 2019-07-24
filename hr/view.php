 
<?php
session_start();
if(!isset($_SESSION['username'])){
header("location:index.php");    
}
else
{
	$con = mysqli_connect("localhost","root","","hr"); 
	
	?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>VIEW ALL Employees</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>



<style type="text/css">

body{
	background-image: url("../images/login.jpg");
	
}

#head
{
	
	font-size:60px;
	color:Blue;
	
}

.menu {
    list-style: none;
}

ul {
    list-style: none;
    text-align: center;
}

.menu li {
    padding: 1px 2px;
    display: inline-block;
}

ul.menu li a {
    text-decoration: none;
    color: #666;
    display: block;
}

ul.menu li ul {
    display: none;
}

ul.menu li ul li:first-child {
    border-top: none;
}

ul.menu li ul li {
    padding: 0px;
    display: block;
    border-bottom: 1px solid #ccc;
}

ul.menu li:hover ul {
    display: block;
    position: absolute;
    padding: 0 5px;
}


.btn-info:hover
{
	color:white;
}

@media screen and (max-width: 480px) {
  #head {
    font-size:30px;
  }
}
</style>
</head>
<body>
<div id="head"><CENTER>TECHSHED TECHNOLOGIES PVT LTD</CENTER></DIV>
<ul id="menu" align="center" style="text-decoration:none; list-style-type:none;margin-top:20px;">

</ul>


<div class="navigation">
<ul class="menu">
	
<li><a href="emplyoee_registration.php" class="btn btn-info">Employee Registration</a></li>
<li><a href="Offer_letter.php" class="btn btn-info">Offer Later</a></li>
<li><a href="release_letter.php" class="btn btn-info" DISABLED='DISABLED'>Release Letter</a></li>
<li><a href="hike.php" class="btn btn-info">Hike</a></li>
<li><a href="salary.php" class="btn btn-info">Salary Slip</a></li>
<li><a href="#" class="btn btn-info">View All Employees</a></li>
<li><a href="logout.php" class="btn btn-info">Logout</a></li>	
	
	
	
</ul>
</div>

<div style="text-align:center; color:#ffffff;"><h1>VIEW EMPLOYEES</h1></div>
<p>&nbsp;</p>
<div class="container">
 <center><div style="background-color:#ffffff;color:red">     <?PHP
    if(isset($_SESSION['message'])){
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
?>          </div>    </center>    
  <center><div style="background-color:#ffffff;color:Green;">     <?PHP
    if(isset($_SESSION['message1'])){
        echo $_SESSION['message1'];
        unset($_SESSION['message1']);
    }
?>          </div>    </center>      


	
  <div class="table-responsive">          
  <table class="table" style="background-color:#ffffff;">
    <thead>
      <tr>
       
		<th>EMP No.</th>
        <th>Name</th>
       
        <th>Designation</th>
        <th>Gender</th>
		<th>Department</th>
		<th>Joining Date</th>
        <th>Total Salary</th>
        <th>DOB</th>
		
		<th>View</th>
		<th>Edit/Delete</th>
        
      </tr>
    </thead>
	
	<?php 
	$sql = "SELECT * FROM emp_information";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
	
	$id=$row["empid"];
	$empno=$row["empno"];
	$name=$row["name"];
	$mobno=$row["mobno"];
	$per_add=$row["per_add"];
	$loc_add=$row["loc_add"];
	$city=$row["city"];
	$designation=$row["designation"];
	$gender=$row["gender"];
	$department=$row["department"];
	$doj=$row["doj"];
	$modee=$row["modee"];
	$dob=$row["dob"];
	$emailid=$row["emailid"];
	$bloodgroup=$row["bloodgroup"];
	$total_salary=$row["total_salary"];
	
	?>
	
	
	
    <tbody>
      <tr>
        
        <td><?php echo $empno; ?></td>
        <td><?php echo $name; ?></td>
		 
        <td><?php echo $designation; ?></td>
        <td><?php echo $gender; ?></td>
		<td><?php echo $department; ?></td>
		
        <td><?php echo $doj; ?></td>
	<td><?php echo $total_salary; ?></td>
	<td><?php echo $dob; ?></td>
		
		<td><a href="Profile.php?view=<?php echo $id; ?>">View</a></td>
		<td><a href="edit.php?empid=<?php echo $row['empid']; ?>">Edit</a>/<A onclick="return ConfirmDelete()" HREF="delete.php?delete=<?php echo $id; ?>">Delete</a></td>
	
      </tr>
    </tbody>
	
<?php }}
else
{
	echo "<tr><td style='color:black;'>No Record Available</td></tr>";
}	?>
  </table>
  </div>
</div>
</body>

<script>
function ConfirmDelete()
{
  var x = confirm("Are you sure you want to delete?");
  if (x)
      return true;
  else
    return false;
}
</script>
</html>           
<?php } ?>                     		                            