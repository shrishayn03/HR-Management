<?php
session_start();
if(!isset($_SESSION['username'])){
header("location:index.php");    
}
else
{
$con = mysqli_connect("localhost","root","","hr");
$output = '';
if(isset($_POST['submit'])){
	
 $query=$_POST['query'];
  $sql=" SELECT * FROM offer_letter WHERE empno like '%".$query."%'";  
 $result = mysqli_query($con,$sql);
  if(mysqli_num_rows($result) > 0){
			while ($row = mysqli_fetch_assoc($result)) {

				$empno = $row ['empno'];
				$name = $row ['name'];
				$address = $row ['address'];
				$type = $row ['job_type'];
				$designation = $row ['designation'];
				$doj = $row ['doj'];

		$output .="
		<div style='background-color:#ffffff';
		<p>&nbsp;</p><p style=padding-left:15px;><b>$name</b><br>
				    <b>$address</b>
					</p>
				<br>
				<br>
				   <p style=padding-left:15px;>Dear <b>$name</b></p>
				   
				   <p style=padding-left:15px;>We are pleased to offer you the <b>$type</b> position of <b>$designation</b> at TECHSHED TECHNOLOGIES PVT LTD 
				   with a start date of <b>$doj</b>. 
				   You will be reporting directly to MD (Sunil Shukla) at Warje Pune Maharashtra.
				   We believe your skills and experience are an excellent match for our company.</p>
				   
				   <p style=padding-left:15px;>As an employee of [company name], you are also eligible for our benefits program, which includes
				   [medical insurance, 401(k), vacation time, etc.], and other benefits which will be 
				   described in more detail in the [employee handbook, orientation package, etc.].</p>
				   
				  <p style=padding-left:15px;> Please confirm your acceptance of this offer by signing and returning this letter by [offer expiration date].
</p>
 

<p style=padding-left:15px;>We are excited to have you join our team! If you have any questions, please feel free to reach out at any time.
</p>
<p style=padding-left:15px; >Sincerely,</p>

<p style=padding-left:15px;>[Your Signature]</p>
				   <p>&nbsp;</p>
				</div>";
      }
  }
 else
 {
	$output = "No Results";
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

<div style="text-align:center;"><h1>OFFER LETTER</h1></div>
  <center><div style="background-color:#ffffff;color:green">     <?PHP
    if(isset($_SESSION['message'])){
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
?>          </div>    </center> 
<p>&nbsp;</p>
<center><a href="add_offer.php"><Button class="btn btn-success">ADD OFFER LETTER</Button></a></center>
<p>&nbsp;</p>
<div class="container">
	<div class="form-group row">
      <div class="col-md-4">
	  </div>
	    <div class="col-md-4">
	  
 <form action="" method="POST">
        <input type="text" name="query" required>
        <input type="submit" name="submit" value="Search" class="btn btn-warning"/>
    </form>
	</div>
	
	  <div class="col-md-4">
	  </div>
	</div>
	<?php
	echo $output;
 
 ?>
	
	
	
	</div>
</body>
</html>
<?php } ?>                            		                            