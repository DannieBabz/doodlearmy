<?php
// Create connection

$conn = mysqli_connect('localhost', 'root', '', 'test');

//Tap on submit to insert form details to database

if(isset($_POST['submit'])){


$surname =$_POST['surname'];
$other_names =$_POST['other_names'];
$phone =$_POST['phone'];
$email =$_POST['email'];
$employee =$_POST['employee'];
$reason =$_POST['reason'];


//Insert to the database
$sql = "INSERT INTO register (surname, other_names, phone, email, employee, reason)" . "VALUES ('$surname','$other_names','$phone','$email','$employee','$reason')";

mysqli_query($conn, $sql);
header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css" >
	  <link href="../task checklist/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
	  <link href="../task checklist/css/freelancer.min.css" rel="stylesheet">
<title>Visitor's Management System</title>
</head>

<body><nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
	<h1>Visitors management system</h1>
	<a href="#" class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger">Contact Admin</a>
</nav>
	<div id="form">
	<div class="col-sm-4">
		<form action="" method="POST" enctype="multipart/form-data" >
			<p>
			<label>Surname:</label>
			<input type="text" placeholder="Surname" name="surname" id="surname" required/>
		</p>

		<p>
			<label>Other-names:</label>
			<input type="text" placeholder="Other-names" name="other_names" id="other_names"required/>
		</p>
		<p>
			<label>Phone Number:</label>
			<input type="number" placeholder="Phone Number" name="phone" id="phone" required/>
		</p>
		<p>
			<label>E-mail Address:</label>
			<input type="text" placeholder="E-mail Address" name="email" id="email" required/>
		</p>
		<p>
			<label>Employee's Name</label>
			<input type="text" placeholder="Employee's name" name="employee" id="employee" required/>
		</p>
		<p>
			<label>Reason for Visit:</label>
			<input type="text" placeholder="Reason for Visit" name="reason" id="reason" />
		</p>
		<p>
		<a href="admin_login_page.php">Log in as Admin</a>
	</p>
		<p>
			<button type="submit" name="submit" id="btn">Register</button>
		</p>

		</form></div></div>


</body>
</html>
