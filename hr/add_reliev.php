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
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>RELEVING FORM</title>
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
<li><a href="hike.php" class="btn btn-info">Hike</a></li>
<li><a href="salary.php" class="btn btn-info">Salary Slip</a></li>
<li><a href="view.php" class="btn btn-info">View All Employees</a></li>
<li><a href="logout.php" class="btn btn-info">Logout</a></li>	
	
	
	
</ul>
</div>

<div style="text-align:center;"><h1> ADD RELEVING LETTER INFORMATION</h1></div>

<p>&nbsp;</p>
<div class="container">
	  <form action="releve.php" method="post">
	  
	   <div class="form-group row">
      <div class="col-md-5">
        <label for="empno" class="a1">Emplyoee No.</label>
        <input class="form-control" id="empno" type="text" name="empno" placeholder="Enter Employee No." required>
      </div>
      <div class="col-md-1">
       
      </div>
      <div class="col-md-5">
        <label for="name"  class="a1">Employee Name</label>
        <input class="form-control" id="name" type="text" name="name" max="10" placeholder="Enter Employee Name" required>
      </div>
    </div>
	  
  <div class="form-group row">
      <div class="col-md-5">
        
      <label for="address" class="a1">Address</label>
      <textarea class="form-control" rows="5" id="address" placeholder="Enter Employee Address" name="address" required></textarea>
   
      </div>
      <div class="col-md-1">
       
      </div>
      <div class="col-md-5">      
      <label for="designation">Job Designation</label>
      <input type="text" class="form-control" id="designation" placeholder="Enter Job Designation" name="designation" required>
      </div>
    </div>
	
   <div class="form-group">
      <label for="pwd">Date Of Releving</label>
      <input type="date" class="form-control" id="dor" placeholder="Enter Date Of Joining" name="dor">
    </div>
   
    <button type="submit"  name="submit" class="btn btn-primary">SAVE</button>
	<P>&nbsp;</p>
  </form>
	</div>
</body>
</html>           
<?php } ?>                     		                            