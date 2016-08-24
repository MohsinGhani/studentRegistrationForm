<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Student Registration</title>
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
	<a href="login.php" class="btn btn-primary">Admin Login</a>
</div>
<div class="col-sm-6">
	<center><h1>Student Ragistration Form</h1></center>
</div>
<div class="col-sm-3"></div>
	
	
</div><!--row-->

<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-10">
<form action="index.php" method="post">
<div class="form-group">
	<label>Student Name</label>
    	<font><?php echo @$_GET['name']?></font>
    <input type="text" class="form-control" placeholder="Write Student Name" name="student_name" />
</div>

<div class="form-group">
	<label>Father Name</label>
    	<font><?php echo @$_GET['f_name']?></font>
    <input type="text" name="father_name" placeholder="Write Father Name" class="form-control"/>
</div>

<div class="form-group">
	<label>Select Student Program</label>
    	<font><?php echo @$_GET['course']?></font>
    <select class="form-control" name="program">
    	<option>Select Program</option>
        <option>Bachlor of Science in Computer Science (BS-CS)</option>
        <option>Bachlor of Science in Software Engineering (BS-SE)</option>
        <option>Bachelor of Business Administration (BBA)</option>
        <option>Master of Business Administration (MBA)</option>
        <option>Master of Business Administration (MBA)</option>
        <option>Master of Science (MS)</option>
    </select>   
</div>
</div><!--col-sm-10-->
</div><!--row-->

<div class="row">
<div class="col-sm-1"></div>
<div class="form-group form-inline ">
<div class="col-sm-5">
	<label>Date of Birth:</label>
    <select class="form-control date" name="birth_date">
    	<option value="null">Date</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
    </select>


    <select class="form-control date" name="birth_month">
    	<option value="null">Month</option>
        <option value="jan">Jan</option>
        <option value="feb">Feb</option>
        <option value="feb">March</option>
        <option value="feb">April</option>
        <option value="feb">May</option>
        <option value="feb">June</option>
        <option value="feb">July</option>
        <option value="feb">Aug</option>
        <option value="feb">Sep</option>
        <option value="feb">Oct</option>
        <option value="feb">Nov</option>
        <option value="feb">Dec</option>
    </select>


    <select class="form-control date" name="birth_year">
    	<option value="null">Year</option>
        <option value="1990">1990</option>
        <option value="1991">1991</option>
        <option value="1992">1992</option>
        <option value="1993">1993</option>
        <option value="1994">1994</option>
        <option value="1995">1995</option>
        <option value="1996">1996</option>
        <option value="1997">1997</option>
        <option value="1998">1998</option>
        <option value="1999">1999</option>
        <option value="2000">2000</option>
        <option value="2001">2001</option>
        <option value="2002">2002</option>
        <option value="2003">2003</option>
        <option value="2004">2004</option>
        <option value="2005">2005</option>
    </select>
</div><!--col-sm-5-->

<div class="col-sm-5">
	<label>Contact Number:</label>
    <input type="number" name="number" class="form-control date" placeholder="Write Contect Number" />
</div><!--col-sm-5-->
</div>
</div><!--row-->

<div class="row ad-row">
<div class="col-sm-1"></div>
<div class="form-group form-inline">

<div class="col-sm-5">
	<label class="date">Admission...:</label>
    <select class="form-control date" name="ad_date">
    	<option value="null">Date</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
    </select>
    
    <select class="form-control date" name="ad_month">
    	<option value="null">Month</option>
        <option value="jan">Jan</option>
        <option value="feb">Feb</option>
        <option value="feb">March</option>
        <option value="feb">April</option>
        <option value="feb">May</option>
        <option value="feb">June</option>
        <option value="feb">July</option>
        <option value="feb">Aug</option>
        <option value="feb">Sep</option>
        <option value="feb">Oct</option>
        <option value="feb">Nov</option>
        <option value="feb">Dec</option>
    </select>
    
    <select class="form-control date" name="ad_year">
    	<option value="null">Year</option>
        <option value="2015">2015</option>
        <option value="2016">2016</option>
        <option value="2016">2017</option>
        <option value="2016">2018</option>
        <option value="2016">2019</option>
        <option value="2016">2020</option>
    </select>
</div><!--col-sm-5-->

<div class="col-sm-5">
	<label>Student Gender.:</label>
	<select class="form-control date" name="gender">
    	<option value="null">Select Student Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
</div><!--col-sm-5-->
</div><!--form-group form-inline-->
</div><!--row-->

<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-10">
<div class="form-group">
	<label>Student Nationality</label>
    <input type="text" name="nationality" class="form-control" placeholder="Write Student Nationality" />
</div>

<div class="form-group">
	<label>Student Address</label>
    <font><?php echo @$_GET['adress']?></font>
    <textarea name="address" class="form-control"></textarea>
</div>

<div class="form-group">
	<input type="submit" name="submit" value="Submit" class="btn btn-primary btn-lg btn-block"/>
</div>
</div><!--col-sm-10-->
</div><!--row-->

</form>
</div><!--container-->
<?php
$conn = mysql_connect('localhost','root','');
$db = mysql_select_db('sms',$conn);
if(isset($_POST['submit'])){
	$s_name = $_POST['student_name'];
	$f_name = $_POST['father_name'];
	$course = $_POST['program'];
	$b_date = $_POST['birth_date'];
	$b_month = $_POST['birth_month'];
	$b_year = $_POST['birth_year'];
	$number = $_POST['number'];
	$ad_date = $_POST['ad_date'];
	$ad_month = $_POST['ad_month'];
	$ad_year = $_POST['ad_year'];
	$gender = $_POST['gender'];
	$nationality = $_POST['nationality'];
	$address = $_POST['address'];
if($s_name == ""){
	echo "<script>window.open('index.php?name=Error: Student Name is Required','_self')</script>";
}
if($f_name == ""){
		echo "<script>window.open('index.php?f_name=Error: Father Name is Required','_self')</script>";
}
if($course == "Select Program"){
		echo "<script>window.open('index.php?course=Error: Please Select Your Program','_self')</script>";
}
if($number == ""){
		echo "<script>window.open('index.php?number=Error: Student Number is Required','_self')</script>";
}
if($address == ""){
		echo "<script>window.open('index.php?adress=Error: Adress is Required','_self')</script>";
}
else{
$query = "insert into sms_t(name,f_name,course,birth_date,birth_month,birth_year,number,admission_date,admission_month,admission_year,gender,nationality,address) values('$s_name','$f_name','$course','$b_date','$b_month','$b_year','$number','$ad_date','$ad_month','$ad_year','$gender','$nationality','$address')";
$run = mysql_query($query);
if($run){
	echo "<script>alert('Data has been insert Successfully');</script>";
}
else{
	echo mysql_error();
}

}
}
?>

</body>
</html>