<?php 
session_start();
$con = mysqli_connect("localhost","root","","hr"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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

.a1{
	color:black;
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


<div class="container">
 
 <center><h1 style="color:black;">Emplyoee Profile</h1></center>
 
  <?php
  if(isset($_GET["view"]))
  
  $id=$_GET["view"];
    $sql = "SELECT * FROM emp_information where empid='$id'";
	$result = mysqli_query($con, $sql);
  if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
  ?>
  <div class="row">
  <div class="col-md-4">
  </div>
  <div class="col-md-4">
  <center> <div class="card" style="width:350px">
    <img class="card-img-top" src="image/<?php echo $row['photo'];?>" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title"><?php echo $row['name']; ?></h4>
      <p class="card-text">Emplyoee No. : <b><?php echo $row['empno']; ?></b><br>
	  Emplyoee Contact No. :<B><?php echo $row['mobno']; ?></b><br>
	  Address 1 :<B><?php echo $row['per_add']; ?></b><br>
	   Address 2 :<B><?php echo $row['loc_add']; ?></b><br>
	  City :<B> <?php echo $row['city']; ?></b><br>
	   Designation : <B><?php echo $row['designation']; ?></B><br>
	   Gender : <B><?php echo $row['gender']; ?></B><br>
	   Department: <B><?php echo $row['department']; ?></b><br>
	  Date Of Joining: <b><?php echo $row['doj']; ?></b><br>
	   Date Of Birthday: <b><?php echo $row['dob']; ?></b><br>
	   Email: <b><?php echo $row['emailid']; ?></b><br>
	    Bloodgroup: <b><?php echo $row['bloodgroup']; ?></b><br>
	   Email: <b><?php echo $row['emailid']; ?></b><br>
	    Total Salary: <b><?php echo $row['total_salary']; ?></b><br>
	   
	  </p>
     
    </div>
  </div></center>
  <p>&nbsp;</p></div>

<div class="col-md-2">
  </div>
  </div>
  
  <?php }}?>
</div>



</body>
</html>                                		                            