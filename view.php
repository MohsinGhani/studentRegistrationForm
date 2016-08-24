<?php
session_start();
if(!$_SESSION['admin_name']){
	header('location:login.php');
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>View Data</title>
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
<div class="container">
<br>
<div class="row">
<div class="col-sm-3">
	<center>
	<a href="index.php"><div class="btn btn-primary view-btn">
    Add Record</div></a>
    <a href="logout.php"><div class="btn btn-primary view-btn">
    Logout</div></a>
    </center>
</div>
<div class="col-sm-6">
<center><h1>Student Information</h1></center>
</div>

<div class="col-sm-3">
<form action="view.php" method="get">
<div class="form-group">
<input class="form-control" type="text" name="search" placeholder="Search Record"/>
</div>
</form>
</div>
</div><!--row-->

<div class="row">
<div class="col-sm-1"></div>

<div class="col-sm-10">



<table class="container-fluid">
  <tr>
  <th>S.no</th>
    <th>Student Name</th>
    <!--<th>Father Name</th>-->
    <th>Student Program</th>
    <!--<th>Date of Birth</th>-->
    <th>Contact Number</th>
    <!--<th>Admission Date</th>
    <th>Student Gender</th>
    <th>Student Nationality</th>
    <th>Student Address</th>-->
    <th>Detail</th>
  </tr>
  <tr>
<?php
$conn = mysql_connect('localhost','root','');
$db = mysql_select_db('sms',$conn);
$query = "select * from sms_t";
$run = mysql_query($query);
$i = 1;
	while($row = mysql_fetch_array($run)){
		$s_no = $row['13'];
?>
	<td><?php echo $i; $i++; ?></td>
    <td><?php echo $row['0']; ?></td>
    <!--<td><?php echo $row['1']; ?></td>-->
    <td><?php echo $row['2']; ?></td>
    <!--<td><?php echo $row['3'] . "-" . $row['4'] . "-" . $row['5']?></td>-->
    <td><?php echo $row['6']; ?></td>
    <!--<td><?php echo $row['7'] . "-" . $row['8'] . "-" . $row['9']?></td>
    <td><?php echo $row['10']; ?></td>
    <td><?php echo $row['11']; ?></td>
    <td><?php echo $row['12']; ?></td>-->
    <td><a href='view.php?details=<?php echo $s_no; ?>'>Detail</a></td>
  </tr>
<?php } ?>
</table></div>
<div class="col-sm-1"></div>
</div><!--row-->

<?php
$record_details = @$_GET['details'];
$query1 = "select * from sms_t where sno='$record_details'";
$run1 = mysql_query($query1);
while($row1 = mysql_fetch_array($run1)){
?>
<hr>
<div class="table-responsive">
<table class="table">
    	<center><h3>Student Details</h3></center>
	<tr>
    <th>Student Name</th>
    <th>Father Name</th>
    <th>Student Program</th>
    <th>Date of Birth</th>
    <th>Contact Number</th>
    <th>Admission Date</th>
    <th>Student Gender</th>
    <th>Student Nationality</th>
    <th>Student Address</th>
  </tr>
  
  <tr>
    <td><?php echo $row1['0']; ?></td>
    <td><?php echo $row1['1']; ?></td>
    <td><?php echo $row1['2']; ?></td>
    <td><?php echo $row1['3'] . "-" . $row1['4'] . "-" . $row1['5']?></td>
    <td><?php echo $row1['6']; ?></td>
    <td><?php echo $row1['7'] . "-" . $row1['8'] . "-" . $row1['9']?></td>
    <td><?php echo $row1['10']; ?></td>
    <td><?php echo $row1['11']; ?></td>
    <td><?php echo $row1['12']; ?></td>
  </tr>
</table>
</div>
<?php } ?>
<?php
if(isset($_GET['search'])){
	$search_record = $_GET['search'];
	$query2 = "select * from sms_t where name = '$search_record'";
	$run2 = mysql_query($query2);
	while($row2 = mysql_fetch_array($run2)){ ?>
<hr><br>
<div class="table-responsive">
<table class="table">
	<tr>
    <th>Student Name</th>
    <th>Father Name</th>
    <th>Student Program</th>
    <th>Date of Birth</th>
    <th>Contact Number</th>
    <th>Admission Date</th>
    <th>Student Gender</th>
    <th>Student Nationality</th>
    <th>Student Address</th>
  </tr>
  
  <tr>
    <td><?php echo $row2['0']; ?></td>
    <td><?php echo $row2['1']; ?></td>
    <td><?php echo $row2['2']; ?></td>
    <td><?php echo $row2['3'] . "-" . $row2['4'] . "-" . $row2['5']?></td>
    <td><?php echo $row2['6']; ?></td>
    <td><?php echo $row2['7'] . "-" . $row2['8'] . "-" . $row2['9']?></td>
    <td><?php echo $row2['10']; ?></td>
    <td><?php echo $row2['11']; ?></td>
    <td><?php echo $row2['12']; ?></td>
  </tr>
</table>
</div>
<?php } } ?>


</div><!--container-->
</body>
</html>