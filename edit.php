<?php
include('conn.php');
session_start();

$_SESSION['edit']=$_POST['edit'];
if (!isset($_SESSION['edit'])) {
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
                	<input  type="hidden"  name="edit">
                	<li><a href="#"><button name="in" class="logout">  Home</button></a></li>
                </form></li>
                <?php
   if (isset($_POST['in'])) {
  
   	unset($_SESSION['edit']);

  	echo '<script>window.location.href="admindash.php";</script>';
  }
                ?>
      </ul>
	</header> 


<center>

	<?php
$id=$_POST['id'];
$query=mysqli_query($con,"SELECT * FROM employe where id='$id'");
if ($query) {
	$row=mysqli_fetch_assoc($query);
?>
<div class="edit">
	<h1 style="color: white">Edit employee</h1>
<form method="post" action="delup.php">
	<input class="in" type="hidden" value="<?php echo $row['id'];  ?>" name="id">
	<input class="in" type="text" value="<?php echo $row['name'];  ?>" name="name">
	<input  class="in"type="text" value="<?php echo $row['email']  ?>" name="email">
	<input  class="in"type="text" value="<?php echo $row['address']  ?>" name="address">
	<input  class="in"type="text" value="<?php echo $row['position']  ?>" name="position">
	<input  class="in"type="text" value="<?php echo $row['salary']  ?>" name="salary"><br>
		<input style="color: blue; width: 100px" class="in"type="submit" value="upadate" name="update">
	<input  style="color: red;width: 100px" class="in"type="submit" name="delete" value="delete">

</form>
</div>
<?php
}
	?>
</center>



</body>
</html>

<style type="text/css">
.in{
	width: 80%;
	height: 35px;
	position: relative;
	top: 40px;
	margin-bottom: 20px;
}
.edit{
	width: 40%;
	height: 500px;
	background-color: dodgerblue;
	border-radius: 20px;
	position: relative;
	top: 70px;
}

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
	.edit{
	width: 400px;
	height: 500px;
	background-color: dodgerblue;
	border-radius: 20px;
	position: relative;
	top: 120px;
}
	.insert{
background-color: dodgerblue;
width: 400px;
height: 400px;
position: relative;
top: 160px;
	}
}
</style>




	
