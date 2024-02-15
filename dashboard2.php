<?php
include('conn.php');
session_start();

$_SESSION['insert']=$_POST['insert'];
if (!isset($_SESSION['insert'])) {
 	echo '<script>window.location.href="index.php";</script>';	
}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="style1.css">
<body>

<header class="header">
		<h1 class="logo"><a href="#">Admin Dashboard</a></h1><div class="admin"><center><p><br><br><br><br>
<?php
$id=$_SESSION['id'];
$query=mysqli_query($con,"SELECT user from auth where id='$id'");
$row=mysqli_fetch_assoc($query);
echo $row['user'];
?>
		</p></center></div>
      <ul class="main-nav">
        
         
                <li><form method="post">
                	<input  type="hidden"  name="insert">
                	<li><a href="#"><button name="in" class="logout">  Home</button></a></li>
                </form></li>
                <?php
   if (isset($_POST['in'])) {
  
   	unset($_SESSION['insert']);

  	echo '<script>window.location.href="admindash.php";</script>';
  }
                ?>
      </ul>
	</header> 
<center>
	<div class="insert"><br>
		<h2 style="color: white;font-family: Constantia, Times, serif;">New employee</h2>
		<form action="login.php" method="post">
			<input type="text" placeholder="Full Name" class="in1" name="name">
			<input type="text" placeholder="email" class="in1" name="email">
			
			<input type="text" placeholder="Address" class="in1" name="address">
			<input type="text" placeholder="position" class="in1" name="position"><br>
       
<input type="hidden" value="<?php echo $_SESSION['id']; ?>" name="u_id">
			Salary <select name="salary">
				<option>5,000</option>
				<option>10,000</option>
				<option>20,000</option>
				<option>30,000</option>
			</select><br><br>
			<button name="add" class="btn">Submit</button>
		</form>
	</div><br><br>
</center>





</body>
</html>

<style type="text/css">
	.btn{
		width: 100px;
		height: 35px;
		transition: 0.1s ease;
	}
	.btn:hover{
		transform: scale(1.1);
	}
	.in1{
		width: 70%;
		height: 35px;
		border:none;
		margin-bottom: 30px;
	}
	.insert{
		width: 40%;
		height: 500px;
		position: relative;
		top: 20px;
		border-radius: 15px;
	}
	}
	.btn1{
		width: 100px;
		height: 30px;
		transition: 0.1s ease;
		border: 1px white solid;
		color: white;
		background-color: transparent;

	}
	.btn1:hover{
		transform: scale(1.1);

	}
.admin{
	width: 100px;
	height: 100px;
	background-image: url('download.png');
	background-repeat: no-repeat;
	background-size: cover;
	border-radius: 100%;
	position: absolute;
	top: 100px;
	left: 40px;
	box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}
.logout{
	width: 100px;
	font-size: 13px;
	background-color: transparent;
	color: red;
	border:none;
	transition: 0.1s ease;
	position: relative;
	left: -50px;
}
.logout:hover{
	transform: scale(1.1);
}

@media(max-width: 600px){
	.insert{
background-color: dodgerblue;
width: 400px;
height: 460px;
position: relative;
top: 160px;
	}
}
</style>




	
