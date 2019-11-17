<?php


$conn = mysqli_connect('localhost', 'root', '', 'test');


if(isset($_POST['user'])){


$uname =$_POST['username'];
$pass =$_POST['password'];

$sql="SELECT * FROM 'admin' WHERE name='$user' && password='$pass' ";
$result=mysqli_query($conn, $sql);
$num=mysqli_num_rows($result);
if($num ==1){
	echo ""
}
}

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css" >
	  <link href="../task checklist/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
	  <link href="../task checklist/css/freelancer.min.css" rel="stylesheet">
<title>
	Log in as Admin
</title>
</head>
<body>
	<div id="form">
		<div class="col-sm-4">
		<h1>LOGIN</h1>
		
		<form action="" method="post">
		<input type="username" placeholder="Username" name="user" id="user">
		<input type="password" placeholder="Password" name="pass" id="pass">
		<button type="submit" name="submit" id="btn">Log In</button>
	</form>
</div>
	</div>
</body>
</html>
