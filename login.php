<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Login</title>
	<!-- My extarnal CSS Sheet -->
    <link href="css/mycss.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">
</head>

<body>
<div class="container login-container">
<h1 align="center">Admin Login</h1>
<form action="login.php" method="post" class="login-form">

<div class="form-group">
    <label>Admin Name</label>
    <input type="text" name="admin_name" class="form-control" placeholder="Enter Admin Name">
</div>

<div class="form-group">
	<label>Admin Password</label>
    <input type="password" name="admin_pass" class="form-control" placeholder="Enter Admin Password">
</div><br>

<div class="form-group">
	<input type="submit" name="submit" value="Submit" class="btn btn-primary btn-lg btn-block"/>
</div>

</form>
</div><!--container-->
</body>
</html>
<?php
$conn = mysql_connect('localhost','root','');
$db = mysql_select_db('sms',$conn);

if(isset($_POST['submit'])){
	$admin_name = $_SESSION['admin_name'] = $_POST['admin_name'];
	$admin_pass = $_POST['admin_pass'];
	
	$query = "select * from login where admin_name ='$admin_name' AND admin_pass='$admin_pass'";
	$run = mysql_query($query);
if(mysql_num_rows($run)>0){
	echo "<script>window.open('view.php','_self');</script>";
}
else{
	echo "<script>alert('Incorrect Name or Password');</script>";
}
}
?>