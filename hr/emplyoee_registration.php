<?php
session_start();
if(!isset($_SESSION['username'])){
header("location:index.php");    
}
else
{
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

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
<center><a href="view.php" class="btn btn-warning">View All Employees</a></center>
<p>&nbsp;</p>
  <center><div style="background-color:#ffffff;color:green">     <?PHP
    if(isset($_SESSION['message'])){
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
?>          </div>    </center> 
 <center><h1 style="color:#ffffff;">Emplyoee Registration</h1></center>
 
  <form action="register.php" method="post" enctype="multipart/form-data">
    <div class="form-group row">
      <div class="col-md-5">
        <label for="ex1" class="a1">Emplyoee ID</label>
        <input class="form-control" id="ex1" type="text" name="empid" required>
      </div>
      <div class="col-md-1">
       
      </div>
      <div class="col-md-5">
        <label for="ex3"  class="a1">Mobile No.</label>
        <input class="form-control" id="ex3" type="tel" name="mobile" max="10" required>
      </div>
    </div>
	
	
	<div class="form-group row">
      <div class="col-md-5">
        <label for="ex1" class="a1">Name</label>
        <input class="form-control" id="ex1" type="text" name="name" required>
      </div>
      <div class="col-md-1">
       
      </div>
      <div class="col-md-5">
        <label for="ex3"  class="a1">Gender</label><br>
        <input id="ex3" type="radio" name="gender" value="male" required> Male &nbsp;&nbsp; <input id="ex3" type="radio" name="gender" value="female" required> FeMale
      </div>
    </div>
	
	<div class="form-group row">
      <div class="col-md-5">
        
      <label for="comment" class="a1">Permanent Address</label>
      <textarea class="form-control" rows="5" id="comment" name="per_add" required></textarea>
   
      </div>
      <div class="col-md-1">
       
      </div>
      <div class="col-md-5">      
      <label for="comment" class="a1">Local Address</label>
      <textarea class="form-control" rows="5" id="comment" name="loc_add" required></textarea>
      </div>
    </div>
	
	
	<div class="form-group row">
      <div class="col-md-5">
        <label for="pic" class="a1">Photo</label>
        <input class="form-control" id="pic" type="file" name="image" >
      </div>
      <div class="col-md-1">
       
      </div>
      <div class="col-md-5">
        <label for="acc"  class="a1">Account No.</label>
        <input class="form-control" id="acc" type="text" name="acc" required>
      </div>
    </div>
	
	<div class="form-group row">
      <div class="col-md-5">
        <label for="ex1" class="a1">D.O.B</label>
        <input class="form-control" id="ex1" type="date" name="dob" required>
      </div>
      <div class="col-md-1">
       
      </div>
      <div class="col-md-5">
        <label for="ex3"  class="a1">Email ID</label>
        <input class="form-control" id="ex3" type="email" name="email" required>
      </div>
    </div>
	
	<div class="form-group row">
      <div class="col-md-5">
        <label for="ex1" class="a1">Date Of Joining</label>
        <input class="form-control" id="ex1" type="date" name="doj" required>
      </div>
      <div class="col-md-1">
       
      </div>
      <div class="col-md-5">
        <label for="ex3"  class="a1">Mode of Transport</label>
        <input class="form-control" id="ex3" type="text" name="mode" required>
      </div>
    </div>
	
	<div class="form-group row">
      <div class="col-md-5">
        <label for="city" class="a1">City</label>
        <input class="form-control" id="city" type="text" name="city" required>
      </div>
      <div class="col-md-1">
       
      </div>
      <div class="col-md-5">
        <label for="ex3"  class="a1">Designation</label>
        <input class="form-control" id="ex3" type="text" name="designation" required>
      </div>
    </div>
	
	<div class="form-group row">
      <div class="col-md-5">
        <label for="ex1" class="a1">Blood Group</label>
        <input class="form-control" id="ex1" type="text" name="bg" required>
      </div>
      <div class="col-md-1">
       
      </div>
      <div class="col-md-5">
        <label for="ex3"  class="a1">Salary Per Month (in Rupees)</label>
        <input class="form-control" id="ex3" type="text" name="rupees" required>
      </div>
    </div>
	
	<div class="form-group row">
      <div class="col-md-5">
        <label for="ex1" class="a1">Department</label>
        <input class="form-control" id="ex1" type="text" name="dp" required>
      </div>
      <!--<div class="col-md-1">
       
      </div>
      <div class="col-md-5">
        <label for="ex3"  class="a1">Salary Per Month (in Rupees)</label>
        <input class="form-control" id="ex3" type="text" name="rupees">
      </div>
    </div>-->
	</div>
	
	<div class="form-group row">
      <center>
	<input type="submit" name="submit" value="CLICK TO REGISTER" class="btn btn-primary">
	  </center>
    </div>
	
  </form>
</div>



</body>
</html>          
<?php } ?>                      		                            