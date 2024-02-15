<?php

include('conn.php');


if (isset($_POST['update'])) {
	$id=$_POST['id'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$position=$_POST['position'];
	$salary=$_POST['salary'];
	$query=mysqli_query($con,"Update employe set name='$name',email='$email',address='$address',position='$position',salary='$salary' where id='$id'");
	if ($query) {
		echo '<script>window.location.href="admindash.php";alert("Data updated successfully");</script>';
	}
}else if (isset($_POST['delete'])) {
	$id=$_POST['id'];
	$query=mysqli_query($con,"Delete from employe where id='$id'");
	if ($query) {
		echo '<script>window.location.href="admindash.php";alert("Data deleted successfully");</script>';
	}
}











?>