<?php
session_start();
include('conn.php');



?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
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
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">profile</a></li>
          <li><a href="#">Contact</a></li>
                <li><form method="post">
                	<button name="logout" class="logout">Logout</button>
                </form></li>
                <?php
  if (isset($_POST['logout'])) {
  	session_destroy();
  	echo '<script>window.location.href="index.php";</script>';
  }
                ?>
      </ul>
	</header> 
<center>
	<p style="color: orange;position: relative;top: 20px">
	<?php
    if (isset($_GET['msg'])) {
    	echo $_GET['msg'];
    }
	?><br><br>
</p>
<div class="insert">
	<center><h1 style="font-family: Constantia, Times, serif;color: white">New employee</h1></center>
	<center>
		<form method="post" action="dashboard2.php">
			<button class="btn1" name="insert">Insert</button>
		</form>

		<form method="post">
			<br>
       <input type="text" placeholder="full name" name="name">
        <button class="btnsearch" name="search">Search</button>
		</form>

	</center>
</div>





<div class="main">
<div class="dit">
<?php
if (isset($_POST['search'])) {
$name=$_POST['name'];
$search=mysqli_query($con,"SELECT * FROM employe Where name like '%$name%' && u_id='$id'");

	
		
	$row=mysqli_fetch_assoc($search);
	if ($search->num_rows>0) {
	?>



<form method="post" action="delup.php">
	<input class="in" type="hidden" value="<?php echo $row['id'];  ?>" name="id">
	<input class="in" type="text" value="<?php echo $row['name'];  ?>" name="name">
	<input  class="in"type="text" value="<?php echo $row['email']  ?>" name="email">
	<input  class="in"type="text" value="<?php echo $row['address']  ?>" name="address">
	<input  class="in"type="text" value="<?php echo $row['position']  ?>" name="position">
	<input  class="in"type="text" value="<?php echo $row['salary']  ?>" name="salary"><br><br>
		<input style="color: blue; width: 100px" class="in"type="submit" value="upadate" name="update">
	<input  style="color: red;width: 100px" class="in"type="submit" name="delete" value="delete">

</form>


	<?php
	# code...
	}


else{
	echo "<br><br><p style='position:absulote'>not found!</p>";
}
}

?>
</div>

<table>
	<tr>
<th>Name</th>
<th>Email</th>
<th>address</th>
<th>position</th>
<th>salary</th>
<th>Edit</th>
</tr>
<?php


$query=mysqli_query($con,"SELECT * from employe where u_id ='$id'");
while($row=mysqli_fetch_assoc($query)){
?>
<tr>
<td><?php echo $row['name']; ?></td>
<td><?php echo$row['email']; ?></td>
<td><?php echo$row['address']; ?></td>
<td><?php echo$row['position']; ?></td>
<td><?php echo'₱ '.$row['salary']; ?></td>
<form method="post" action="edit.php">
	<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
	<td><button class="edit" name="edit">Edit</button>
</form>
</tr>
<?php
}


?>





</table>
</div>
</center>
</body>
</html>
<style type="text/css">
	.dit{
		width: 40%;
		top: -30px;
		position: relative;
	}
	.in{
		box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
		border:none;
		width: 60%;
		height: 30px;
	color: black;
}
.edit{
	width: 100px;
	height: 30px;
	background-color: green;
	color: white;
	border: none;
	transition: 0.1s ease;
}
.edit:hover{
	transform: scale(1.1);
}
	table{
		width: 70%;
		position: relative;
		top: 20px;
		
	}
	th{
	color: white;
		background-color: blue;	
	}
	td{
		text-align: center;
	}
	.insert{
background-color: dodgerblue;
width: 30%;
height: 170px;
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
	width: 50px;
	font-size: 13px;
	background-color: white;
	color: red;
	transition: 0.1s ease;
}
.logout:hover{
	transform: scale(1.1);
}

@media(max-width: 600px){
	.insert{
background-color: dodgerblue;
width: 30%;
height: 170px;
	}
	.main{
		position: relative;
		top: 100px;
	}
.insert{
background-color: dodgerblue;
width: 400px;
height: 170px;
	}

}
</style>




	
