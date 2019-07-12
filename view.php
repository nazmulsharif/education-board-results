<?php
	session_start();
	if(empty($_SESSION['board'])||empty($_SESSION['roll'])||empty($_SESSION['year'])){
		header("location:search.php");
	}
	include_once("inc/connection.php");
	$roll = $_SESSION['roll'];
	$board = $_SESSION['board'];
	$exam = $_SESSION['exam'];
	$year = $_SESSION['year'];
	$reg = $_SESSION['reg'];
	$name = $_SESSION['name'];
	$fname = $_SESSION['fname'];
	$mname = $_SESSION['mname'];
	$type = $_SESSION['type'];
	$dob = $_SESSION['dob'];
	$inst = $_SESSION['inst'];
	$gpa = $_SESSION['gpa'];
	$group = $_SESSION['group'];
	$bang_o = $_SESSION['bang_o'];
	$bang_g = $_SESSION['bang_g'];
	$bang_gp=  $_SESSION['bang_gp'];
	$math_o = $_SESSION['math_o'];
	$math_g = $_SESSION['math_g'];
	$math_gp = $_SESSION['math_gp'];
	$eng_o = $_SESSION['eng_o'];
	$eng_g = $_SESSION['eng_g'];
	$eng_gp = $_SESSION['eng_gp'];
	$ss_o = $_SESSION['ss_o'];
	$ss_g = $_SESSION['ss_g'];
	$ss_gp = $_SESSION['ss_gp'];
	$re_o = $_SESSION['re_o'];
	$re_g = $_SESSION['re_g'];
	$re_gp = $_SESSION['re_gp'];
	$ph_o =$_SESSION['ph_o'];
	$ph_g =$_SESSION['ph_g'];
	$ph_gp= $_SESSION['ph_gp'];
	$ch_o = $_SESSION['ch_o'];
	$ch_g = $_SESSION['ch_g'];
	$ch_gp = $_SESSION['ch_gp'];
	$opt_o = $_SESSION['opt_o'];
	$opt_g = $_SESSION['opt_g'];
	$opt_gp = $_SESSION['opt_gp'];
	$ict_o = $_SESSION['ict_o'];
	$ict_g = $_SESSION['ict_g'];
	$ict_gp = $_SESSION['ict_gp'];
	$opt_name = $_SESSION['op_name'];
	$result = $_SESSION['result'];
	$gpa = $_SESSION['gpa'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Education Board Results</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/search.css">
	<link rel="stylesheet" href="css/view.css">	
</head>
<body>
	<div class="container">
		<div class="box">
			<div class="header-up">
				<img src="images/search_header.jpg" alt="">
			</div>
			<?php if($exam == "HSC"){?>
				<h4 class="text-center font-weight-bold">HSC Result <?php echo $year;?></h4>
			<?php }?>
			<?php if($exam == "SSC"){?>
				<h4 class="text-center font-weight-bold">SSC/Dhakil/Equivalent Result <?php echo $year;?></h4>
			<?php }?>
			<?php if($exam == "JSC"){?>
				<h4 class="text-center font-weight-bold">JSC Result <?php echo $year;?></h4>
			<?php }?>
			<table class="table_start">              
				<tr>
					<td width="12%">Roll No</td>
					<td width="34.33%"><?php echo $roll;?></td>
					<td width="25.33%">Name</td>
					<td width="43.33%"><?php echo $name;?></td>
				</tr>
				<tr>
					<td>Board</td>
					<td><?php echo $board;?></td>
					<td>Father's Name</td>
					<td><?php echo $fname;?></td>
				</tr>
				<tr>
					<td>Group</td>
					<td><?php echo $group;?></td>
					<td>Mother's Name</td>
					<td><?php echo $mname;?></td>
				</tr>
				<tr>
					<td>Type</td>
					<td><?php echo $type;?></td>
					<td>Date of Birth</td>
					<td><?php echo $dob;?></td>
				</tr>
				<tr>
					<td>Result</td>
					<td class="font-weight-bold"><?php echo $result;?></td>
					<td>Institute</td>
					<td><h6><?php echo $inst;?></td>
				</tr>
				<tr>
					<td>GPA</td>
					<td colspan="3"class="font-weight-bold"><?php echo $gpa;?></td>
				</tr>
			</table>
			<h4 class="text-center font-weight-bold">Grade Sheet</h4>
			<table class="table_end">
				<tr>
					<th>Code</th>
					<th>Subject</th>
					<th>Grade</th>
				</tr>
				<tr>
					<td>101</td>
					<td>BANGLA</td>
					<td><?php echo $bang_g;?></td>
				</tr>
				<tr>
					<td>107</td>
					<td>ENGLISH</td>
					<td><?php echo $eng_g;?></td>
				</tr>
				<tr>
					<td>109</td>
					<td>MATHEMATICS</td>
					<td><?php echo $math_g;?></td>
				</tr>
				<tr>
					<td>145</td>
					<td>SOCIAL SCIENCE</td>
					<td><?php echo $ss_g;?></td>
				</tr>
				<tr>
					<td>111</td>
					<td>RELIGION (ISLAM)</td>
					<td><?php echo $re_g;?></td>
				</tr>
				<tr>
					<td>136</td>
					<td>PHYSICS</td>
					<td><?php echo $ph_g;?></td>
				</tr>
				<tr>
					<td>136</td>
					<td>CHEMESTRY</td>
					<td><?php echo $ch_g;?></td>
				</tr>
				<tr>
					<td>137</td>
					<td><?php echo $opt_name;?></td>
					<td><?php echo $opt_g;?></td>
				</tr>
			</table>
			<a href="inc/back.php" class="text-center d-block font-weight-bold">Search again</a>


			<div class="footer">
				<img src="images/search_footer.jpg" alt="">
			</div>
		</div>
		<div class="ad">
			<div class="row">
				<div class="col-3">
					<img src="images/playst.jpg" alt="" width="100%">
				</div>
				<div class="col-4" class="text-center">
					<h6 class="">Public Result on Andorid</h6>
					<img src="images/android.jpg" alt="">
					<h6>It's completely free</h6>
				</div>
				<div class="col-5 text-right">
					<h6>Last Update 06 May 2018 <br>Trial Version </h6>
				</div>
			</div>
		</div>

	</div>
	
</body>
</html>