<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<center>
	<h1 style="font-family: 'MV Boli', Times, serif;">Admin<img src="download.png" width="100px" height="50px"></h1>


	<div class="container">
<div class="login">
			<center><h2>Sign-in</h2>
				<form action="login.php" method="post">
				<input class="in1" type="email" placeholder=" email" name="email">
					<input class="in2" type="password" placeholder="password" name="password"><br>
					<button class="btn1" name="login">Login</button>
					</form>
			</center>

		</div>
	<div class="register">
		<form method="post" action="login.php">
	<center><h2>Sign-up</h2></center>
	
	<input class="in1" type="text" placeholder="username" name="user">	
	<input class="in1" type="email" placeholder="email" name="email">
	<input class="in1" name="password" type="password" placeholder="password"><br>
   <button class="btn1" name="register">Register</button>
       </form>
	</div>
		

</div>
</center>


</body>
</html>

<style type="text/css">
	
.in1,.in2{
	width: 60%;
	height: 30px;
	margin-bottom: 50px;
	position: relative;
	border:none;
	top: 60px;
box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
border-radius: 20px;
}
.btn1{
width: 30%;
height: 30px;
background-color: green;
position: relative;
top: 60px;
border:none;
color: white;
transition: 0.1s;
}
.btn1:hover{
	transform: scale(1.1);
}
	.register{
		width: 50%;
		height: 500px;
		box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
	}
	.login{
			
		width: 50%;
		height: 500px;
	}
	.container{

		top: 20px;
		position: relative;
		display: flex;
		flex-wrap: wrap;
		width: 60%;

		height: 500px;
		box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
	}
	@media(max-width: 600px){
		.register{
		width: 400px;
		height: 500px;
		box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
	}
	.login{
			
		width: 400px;
		height: 500px;
	}


	.container{

		top: 20px;
		position: relative;
		display: flex;
		flex-wrap: wrap;
		width: 400px;

		height: 500px;
		box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
	}
	}
</style>