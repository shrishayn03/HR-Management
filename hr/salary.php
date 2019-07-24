<?php

session_start();
if(!isset($_SESSION['username'])){
header("location:index.php");    
}
else
{
	
$con = mysqli_connect("localhost","root","","hr");
$output = '';
if(isset($_POST['search'])){
	
 $empno=$_POST['emp'];
 $fdate=$_POST['fdate'];
 $todate=$_POST['todate'];

  $sql="SELECT * FROM salary WHERE fdate >= '$fdate' AND todate <= '$todate' AND empno like '%".$empno."%'";  
 $result = mysqli_query($con,$sql);
  if(mysqli_num_rows($result) > 0){
			while ($row = mysqli_fetch_assoc($result)) {
$id = $row ['id'];
				$empno = $row ['empno'];
				$name = $row ['name'];
				$designation = $row ['designation'];
				$absent = $row ['absent'];
				$salary = $row ['salary'];
				$tax = $row ['tax'];
				$fdate = $row ['fdate'];
				$todate = $row ['todate'];
				$total_salary = $row ['total_salary'];
				

		$output .=" 
   <table class='table table-responsive' style='background-color:#ffffff; width:auto;'>
  <thead>
      <tr>
       <th>EMP No.</th>
        <th>Employee Name</th>
        <th>Designation</th>
		 <th>No. Of Days Absent</th>
        <th>Basic Salary</th>
		 <th>Tax</th>
		 <th>From Date</th>
        <th>To Date</th>
		 <th>Gross Salary</th>
		 <th align='center'>Slip</th>
      </tr>
   </thead>
    
	<tbody>
	 
	 <tr>
      <td>$empno</td>
       <td>$name</td>
		 <td>$designation</td>
	   <td>$absent</td>
      <td>$salary</td>
      <td>$tax</td>
      <td>$fdate</td>
	   <td>$todate</td>
	   <td>$total_salary</td>
	   <td><a href='slip.php?id=$id'>Slip </a></td>
     </tr>
	
	</tbody>
  </table>";
      }
  }
 else
 {
	$output = "<center><div style='background-color:#ffffff; color:red;'>No Results</div></center>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Simple Login Form</title>
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


table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
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
<li><a href="release_letter.php" class="btn btn-info">Release Letter</a></li>
<li><a href="hike.php" class="btn btn-info">Hike</a></li>
<li><a href="#" class="btn btn-info">Salary Slip</a></li>
<li><a href="view.php" class="btn btn-info">View All Employees</a></li>
<li><a href="io/index.php" class="btn btn-info">Logout</a></li>	
	
	
	
</ul>
</div>

<div style="text-align:center;"><h1>SALARY SLIP</h1></div>
<center><a href="salary_info.php"><Button class="btn btn-success">ADD SALARY</Button></a> | <a href="View_slip.php"><Button class="btn btn-success">VIEW SALARY SLIPS</Button></a></center>
<p>&nbsp;</p>
<div class="container">
	<div class="form-group row">
      <div class="col-md-2">
	  </div>
	    <div class="col-md-8">
	  
 <form action="" method="POST">
 <table style="width:100%; background-color:#ffffff;" >
 
		<tr>
				<td align="center"><b>Enter Employee No.</b></td>
				<td><input type="text" name="emp" ></td>
   
		</tr>
		<tr>
				<td align="center"><b>Enter From Date</b></td>
				<td><input type="date" name="fdate" required></td>
    
		</tr>
		
		<tr>
				<td align="center"><b>Enter To Date</b></td>
				<td><input type="date" name="todate" required></td>
    
		</tr>
		
		<tr>
		
		<td colspan="2"> <center><button type="submit"  name="search" class="btn btn-primary">Search</button></center></td>
</tr>
</table>
    </form>
	</div>
	
	  <div class="col-md-2">
	  </div>
	</div>
	<?php
	echo $output;
 
 ?>
	
	
	
	</div>
</body>
</html>
<?php } ?>                		                            