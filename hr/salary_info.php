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
<title>SALARY INFORMATION</title>
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
<li><a href="release_letter.php" class="btn btn-info">Release Letter</a></li>
<li><a href="bond/index.php" class="btn btn-info">Hike</a></li>
<li><a href="salary.php" class="btn btn-info">Salary Slip</a></li>
<li><a href="view.php" class="btn btn-info">View All Employees</a></li>
<li><a href="io/index.php" class="btn btn-info">Logout</a></li>	
	
	
	
</ul>
</div>
<center><a href="View_slip.php"><Button class="btn btn-success">VIEW SALARY SLIPS</Button></a></center>
<div style="text-align:center;"><h1> ADD SALARY INFORMATION</h1></div>
<div class="container">
	
	  <form action="" method="post">
    <div class="form-group row">
	  <div class="col-md-5">
      <label for="empno">Employee No.</label>
      <input type="text" class="form-control" id="empno" placeholder="Enter Employee No." name="empno" required>
    </div>
	 <div class="col-md-1">
       
      </div>
	   <div class="col-md-5">
    <div class="form-group">
      <label for="name"> Employee Name</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Employee Name" name="name" required>
    </div>
	</div>
	</div>
	
	 <div class="form-group row">
	  <div class="col-md-5">
      <label for="name"> Employee Designation</label>
      <input type="text" class="form-control" id="designation" placeholder="Enter Employee Designation" name="designation" required>
    </div>
	 
	  <div class="col-md-1">
       
      </div>
	  <div class="col-md-5">
   <div class="form-group">
      <label for="absent">No. Of Days Absent</label>
      <input type="text" class="form-control" id="absent" placeholder="Enter No. of Days Absent" name="absent" required>
    </div>
	</div>
	</div>
   
   <div class="form-group row">
   <div class="col-md-5">
      <label for="salary">Basic Salary</label>
      <input type="text" class="form-control" id="salary" placeholder="Enter No. of Days Absent" name="salary" required>
    </div>
	 <div class="col-md-1">
       
      </div>
    <div class="col-md-5">
    <div class="form-group">
      <label for="pwd">From Date </label>
      <input type="date" class="form-control" id="fdate" placeholder="Enter Date" name="fdate" required>
    </div>
	</div>
   </div>
    <div class="form-group">
      <label for="pwd">To Date </label>
      <input type="date" class="form-control" id="todate" placeholder="Enter Date" name="todate"required >
    </div>
   
    <button type="submit"  name="submit" class="btn btn-primary">CALCULATE</button>
  </form>
  
  
  <?php 
  $total_salary=0;
  if(isset($_POST['submit'])){
  
 $empno=$_POST['empno'];
  $name=$_POST['name'];
  $designation=$_POST['designation'];
   $absent=$_POST['absent'];
   
   $salary=$_POST['salary'];
  $fdate=$_POST['fdate'];
   $todate=$_POST['todate'];
 $ChequeNo = rand(1,9999999999);
 if($salary <= 10000)
{
	$tax = $salary * 12/100; 
}

else
{
	$tax = $salary * 15/100; 
}
	
 $salary1 = $salary - $tax;
 
 
 $total_salary = $salary1;
 
 
 if($absent <= 5)
 {
	 $deduction = $absent*400;
 }
 elseif ($absent >=6 && $absent <=10 )
 {
	 $deduction = $absent*500;
 }
 
 elseif($absent >=11)
 {
	 $deduction = $absent*700;
 }
 else
 {
	 echo "No Salary";
 }
 
$total_salary = $total_salary - $deduction;
$deduct = $tax + $deduction;
echo "<p>&nbsp;</p>";

   echo "<table class='table table-responsive' style='background-color:#ffffff; width:auto;'>";
  echo "<thead>";
      echo "<tr>";
       echo "<th>EMP No.</th>";
        echo "<th>Employee Name</th>";
        echo "<th>Designation</th>";
		 echo "<th>No. Of Days Absent</th>";
        echo "<th>Basic Salary</th>";
		 echo "<th>Tax</th>";
		 echo "<th>From Date</th>";
        echo "<th>To Date</th>";
		 echo "<th>Gross Salary</th>";
      echo "</tr>";
   echo  "</thead>";
    
	echo "<tbody>";
	 
	 echo "<tr>";
      echo  "<td>$empno</td>";
       echo "<td>$name</td>";
		 echo "<td>$designation</td>";
	   echo "<td>$absent</td>";
      echo  "<td>$salary</td>";
      echo   "<td>$tax</td>";
      echo  "<td>$fdate</td>";
	   echo  "<td>$todate</td>";
	    echo  "<td>$total_salary</td>";
     echo "</tr>";
	
	echo "</tbody>";
  echo "</table>";
  
  $sql= "INSERT INTO salary (id,empno,name,designation,absent,salary,tax,fdate,todate,total_deducte,total_salary,ChequeNo) VALUES ('','$empno','$name','$designation','$absent','$salary','$tax','$fdate','$todate','$deduct','$total_salary','$ChequeNo')";
 mysqli_query($con, $sql);
 
 
 }




  ?>
  
  
  
  
	</div>
	
	
	
	
	
	
</body>
</html>        
<?php } ?>                        		                            