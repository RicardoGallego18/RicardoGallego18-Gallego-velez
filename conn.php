<?php

$con=mysqli_connect("fdb1032.awardspace.net","4443880_employee","Employee(*123)","4443880_employee");
if ($con != false) {
	# code...

}else if ($con==0) {
	echo "connectin is =0";
}
?>