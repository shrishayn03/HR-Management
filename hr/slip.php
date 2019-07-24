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

@media screen and (max-width: 550px) {
.col-md-10 h2{
   font-size:22px;
  }

.col-md-10 h4{
   font-size:15px;
  }
  
  #head{
	  font-size:35px;
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
<li><a href="salary.php" class="btn btn-info">Salary Slip</a></li>
<li><a href="view.php" class="btn btn-info">View All Employees</a></li>
<li><a href="io/index.php" class="btn btn-info">Logout</a></li>	
	
	
	
</ul>
</div>



<p>&nbsp;</p>
<div class="container">

<?php
$con = mysqli_connect("localhost","root","","hr");
if(isset($_GET['id']))
{
	$a = $_GET['id'];
	$result = "SELECT * FROM salary where id='$a'";
		$r1=mysqli_query($con,$result);
		
		if(mysqli_num_rows($r1)>0)
		{
			while($row= mysqli_fetch_array($r1))
			{
	
	

?>
<div class="row">
	 <div class="col-md-1">
	 </div>
	 
	 <div class="col-md-10" style="background-color:white;">
	<H2 class="text-center">TECHSHED TECHNOLOGIES PVT LTD</H2>
	<p class="text-center"> Office 201 2 nd Floor above McDonald's <br>wall street 24 near cipla foundation, <br>Warje, Pune, Maharashtra 411058</p>
	<div style="text-align:center;"><h4>Salary Slip</h4></div>
	<B>Employee Name: </b><span style="text-decoration:underline"><?php echo $row["name"];?></span><br>
	<B>Designation: </b><span style="text-decoration:underline"><?php echo $row["designation"];?></span><br>
	<B>From Date: </b><span style="text-decoration:underline"><?php echo $row["fdate"];?></span> &nbsp;&nbsp; <B>To Date: </b><span style="text-decoration:underline"><?php echo $row["todate"];?> </span>
	<P></p>
	 <table class="table table-bordered">
    <thead>
      <tr>
        <th colspan="2">Basic Earnings</th>
        <th colspan="2">Deduction</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Basic Salary</td>
        <td><?php echo $row["salary"];?></td>
        <td>No. Of Days Absent</td>
		 <td><?php echo $row["absent"];?></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td>Tax</td>
       <td><?php echo $row["tax"];?></td>
	  </tr>
      <tr>
        <td></td>
        <td></td>
        <td>Total Deduction</td>
       <td><?php echo $row["total_deducte"];?></td>
	  </tr>
	  
	   <tr>
        <td></td>
        <td></td>
        <td><B>Net Salary</b></td>
       <td><B><?php echo $row["total_salary"];?></b></td>
	  </tr>
    </tbody>
  </table>
	<B>Cheque No: </b><span style="text-decoration:underline"> <B><?php echo $row["ChequeNo"]; ?></B></span><br>
	<B>Name Of The Bank: </b><span style="text-decoration:underline"> <b>ICICI</B></span><br>
	<B>Date: </b><span style="text-decoration:underline"> <b><?php echo date("Y/m/d"); ?></B></span><br>
	<P>&nbsp;</P>
	<P>&nbsp;</P>
	Signature of The Employee
	
	<P>&nbsp;</P>
	 </div>
	 <div class="col-md-1">
	 </div>
	</div>
	<P>&nbsp;</p>
	
<?php }}} ?>
	</div>
</body>
</html>                                		                            